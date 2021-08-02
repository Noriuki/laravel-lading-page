<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class ContactController extends Controller
{

    public function create(Request $req)
    {
        Contact::create([
            'name' => $req['fullname'],
            'email' => $req['email'],
            'cellphone' => $req['cellphone'],
        ]);
        return back()->with('message', 'Enviado com sucesso!');
    }
}
