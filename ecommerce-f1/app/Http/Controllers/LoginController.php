<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function telaLogin() {
        return view("user.login");
    }

    public function login(Request $request) {
        $usuario = ["email" => $request->email, "senha" =>$request->senha ];

        if ($this->testarLogin($usuario)) {
            Session::put("usuario", $usuario);
            return redirect("usuario");
        }
        return view("user.login")->with("falha", "Usuário ou senha incorretos.");
    }

    public function logout(Request $request) {
        Session::forget("usuario");
        return redirect("/usuario");
    }

    private function testarLogin($usuario) {
        //primeiro buscar usuario pelo email

        //se encontrar o usuario validar a senha 

        //tudo certo true, senão false

        // Faça uma autenticação decente ao invés disso!
        return $usuario["email"] === "joao@gmail.com" && $usuario["senha"] === "123123";
    }
}
