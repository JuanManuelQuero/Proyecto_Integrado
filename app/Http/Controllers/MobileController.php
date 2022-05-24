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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mobile $mobile)
    {
        return view('mobiles.detail', compact('mobile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //### Otros Métodos ###

    public function venderMovil($id) {
        $mobile = Mobile::where('id', $id)->first();
        $stock = $mobile->stock;
        if($stock >= 1) {
            $mobile->stock = $stock - 1;
            $mobile->update();
        } else {
            return redirect()->route('mobiles.index')->with('mensaje', "No queda stock");
        }
        return redirect()->route('mobiles.index')->with('mensaje', "Móvil comprado");
    }
}
