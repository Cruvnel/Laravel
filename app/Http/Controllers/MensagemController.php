<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//2º Passo - utilizar o comando "php artisan make:controller NomeController" para criar o controller 

class MensagemController extends Controller
{
    public function index()
    {
        return view('mensagem');
    }
}
