<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "email" => 'required',
            "msg" => 'required',
        ]);

        $correo = new ContactMailable($request->all());

        Mail::to('carlos@villatoro.dev')->send($correo);

        return redirect()->route('home')->with('info', 'Mensaje enviado');
    }
}
