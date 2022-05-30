<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index() {
        return view('contacto.index');
    }

    public function enviar(Request $request) {
        $request->validate([
            'nombre'=> ['required', 'string', 'min:5'],
            'apellidos'=>['required', 'string', 'min:10'],
            'email'=>['required', 'email'],
            'mensaje'=>['required', 'string']
        ]);

        $correo = new ContactoMailable($request->all());
        Mail::to('admin@correo.es')->send($correo);
        return redirect()->route('dashboard');
    }
}
