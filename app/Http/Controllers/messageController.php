<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;


class messageController extends Controller
{
    public function store()
    {
        request()->validate([
            //obtenemos los valores del attrb name del campo
            'nombre'  => 'required',
            'correo'  => 'required|email',
            'subject' => 'required',
            'mensaje' => 'required',
        ]);

        //Enviar el email
        Mail::to('hkenneth939@gmail.com')->send(new MessageReceived);

        return request();
    }
}
