<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $apple = Mobile::orderBy('modelo', 'asc')->modelo($request->modelo)->where('marca', 'Apple')->get();
        $samsung = Mobile::orderBy('modelo', 'asc')->modelo($request->modelo)->where('marca', 'Samsung')->get();
        $xiaomi = Mobile::orderBy('modelo', 'asc')->modelo($request->modelo)->where('marca', 'Xiaomi')->get();
        $huawei = Mobile::orderBy('modelo', 'asc')->modelo($request->modelo)->where('marca', 'Huawei')->get();
        return view('mobiles.index', compact('apple', 'samsung', 'xiaomi', 'huawei', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function show(Mobile $mobile)
    {
        $comments = $mobile->comments()->get();
        return view('mobiles.detail', compact('mobile', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobile $mobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobile $mobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobile $mobile)
    {
        //
    }

    
    //Otros métodos

    //función que nos permite agragar items al carrito dependiendo del
    //id del usuario
    public function addCart(Mobile $mobile) {
        $userId = auth()->user()->id;
        \Cart::session($userId)->add(array(
            'id' => $mobile->id,
            'name' => $mobile->marca,
            'price' => $mobile->precio,
            'quantity' => 1,
            'attributes' => array(
                'modelo' => $mobile->modelo,
                'image' => $mobile->image,
            )
        ));
       \Cart::getContent();
        return redirect()->route('mobiles.index')->with('mensaje', 'Móvil agregado al carrito');
    }
}
