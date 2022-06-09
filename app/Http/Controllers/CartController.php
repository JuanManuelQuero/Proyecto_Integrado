<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    public function index() {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));
    }

    public function remove($itemId) {
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($itemId);
        return redirect()->route('cart.index')->with('mensaje', 'Articulo eliminado del carrito');
    }

    public function clear() {
        $userId = auth()->user()->id;
        \Cart::session($userId)->clear();
        return redirect()->route('cart.index')->with('mensaje', 'Se ha vaciado el carrito');
    }
    
}
