<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();//retorna todos os usuarios e guarda nessa variavel

      return view('usuario.index')->with('usuarios',$usuarios);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Usuario $usuario){ // model e variavel

      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      return view ('usuario.show', ['usuario' =>$usuario,'categorias' => $categorias]);

    }
    public function create(){
      return view ('usuario.create', ['categorias' => []]);
    }
    public function store(Request $request){
      $usuario = new User();
      $usuario->nome = $request->nome;
      $usuario->email = $request->email;
      $usuario->senha = $request->senha;
      $usuario->flAdmin = $request->flAdmin;
    $usuario->save();

      return redirect ('usuario');
    }

    public function edit (User $usuario){
      return view ('usuario.edit', ['usuario' => $usuario,'categorias' => []]);
    }
    public function update(Request $request, User $usuario){
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->flAdmin = $request->flAdmin;
        $usuario->save();

      return redirect ('usuario');
    }

    public function destroy (User $usuario){
      $usuario->delete();
      return redirect ('usuario');
    }
}
