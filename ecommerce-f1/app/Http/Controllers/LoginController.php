<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function telaLogin() {
        return view("user.login");
    }

    public function login(Request $request) {
        $email = $request->email;
        $senha = $request->senha;
        if ($this->testarLogin($email, $senha)) {
            Session::put("email", $email);
            return redirect("clientes/");
        }
        Session::forget("usuario");
        return view("user.login")->with("falha", "Usuário ou senha incorretos.");
    }

    public function logout(Request $request) {
        Session::forget("usuario");
        return redirect("/");
    }

    private function testarLogin($email, $senha) {
        // Faça uma autenticação decente ao invés disso!
        return $usuario === "joao@gmail.com" && $senha === "123123";
    }
}
