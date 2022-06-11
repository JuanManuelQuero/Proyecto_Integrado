<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;

class CartController extends Controller
{
    //Método que obtiene el contenido del carrito dependiendo de la id del usuario
    public function index() {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));
    }

    //Método que nos permite elimar un artículo
    public function remove($itemId)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($itemId);
        return redirect()->route('cart.index')->with('mensaje', 'Articulo eliminado del carrito');
    }

    //Método para vaciar el carrito
    public function clear()
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->clear();
        return redirect()->route('cart.index')->with('mensaje', 'Se ha vaciado el carrito');
    }

    //Métodos que nos permite actualizar la cantidad del artículo
    public function moreQuantity($itemId)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->get($itemId);
        \Cart::session($userId)->update($itemId, array(
            'quantity' => 1
            )
        );
        return redirect()->route('cart.index');
    }

    public function lessQuantity($itemId)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->get($itemId);
        \Cart::session($userId)->update($itemId, array(
            'quantity' => -1
            )
        );
        return redirect()->route('cart.index');
    }

    //Método que símula venta de lo/s artículo/s y vacia el carrito una vez se confirma la compra

    public function vender() {
        $userId = auth()->user()->id;

        $items = \Cart::session($userId)->getContent();

        foreach($items as $row){
            $mobile = Mobile::where('id', $row->id)->first();
            $stock = $mobile->stock;
            if($stock >= 1) {
                $mobile->stock = $stock - 1;
                $mobile->update();
            } else {
                return redirect()->route('cart.index')->with('mensaje', 'No se ha podido realizar la compra');
            }
        }
        \Cart::session($userId)->clear();
        return redirect()->route('cart.index')->with('mensaje', 'Compra realizada');
    }
}
