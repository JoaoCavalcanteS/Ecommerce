<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Login;

class UsuarioController extends Controller
{

    public function index(){
      $usuarios = User::all();//retorna todos os usuarios e guarda nessa variavel

      // if (!Session::has("usuario")) {
      //     return redirect("user.login");
      // }
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');

      // $itens = User::all();
      return view('usuario.index')->with('usuarios',$usuarios)->with("usuario", $usuario);
    }

    public function show(User $usuario){ // model e variavel

      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      return view ('usuario.show', ['usuario' =>$usuario,'categorias' => $categorias]);

    }
    public function create(){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('usuario.create', ['usuario' => $usuario, 'categorias' => []]);
    }

    public function store(Request $request){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      $u = new User();
      $u->nome = $request->nome;
      $u->email = $request->email;
      $u->senha = $request->senha;
      $u->flAdmin = $request->flAdmin;
      $u->save();

      return redirect ('usuario');
    }

    public function edit (User $u){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('usuario.edit', ['usuario' => $usuario, 'categorias' => []]);
    }
    public function update(Request $request, User $u){
        $u->nome = $request->nome;
        $u->email = $request->email;
        $u->senha = $request->senha;
        $u->flAdmin = $request->flAdmin;
        $u->save();

      return redirect ('usuario');
    }

    public function destroy (User $u){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      $u->delete();
      return redirect ('usuario');
    }
}
