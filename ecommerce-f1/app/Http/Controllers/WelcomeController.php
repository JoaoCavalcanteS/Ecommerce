<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index(){
      $usuario = $this->quemEstaLogado();
      return view('welcome')->with('usuario', $usuario);
    }
}