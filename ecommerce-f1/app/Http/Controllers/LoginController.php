<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function telaLogin() {
        return view("user.login");
    }

    public function login(Request $request) {
        $usuario = ["email" => $request->email, "senha" =>$request->senha ];

        if ($this->testarLogin($usuario)) {
            Session::put("usuario", $usuario);
            return redirect("/");
        }
        return view("user.login")->with("falha", "Usuário ou senha incorretos.");
    }

    public function logout(Request $request) {
        Session::forget("usuario");
        return redirect("/usuario");
    }

    private function testarLogin($usuario) {
        $credentials = $usuario;

        if (Auth::attempt($credentials)) {
            // O usuário foi autenticado com sucesso

            return true;
        } else {
            // As credenciais de login estão incorretas

            return false;
        };
    }
}
