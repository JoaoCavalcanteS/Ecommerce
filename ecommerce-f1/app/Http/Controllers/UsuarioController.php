<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();//retorna todos os usuarios e guarda nessa variavel

      return view('usuario.index')->with('usuario',$usuarios);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Usuario $usuarios){ // model e variavel

      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      return view ('usuario.show', ['usuario' =>$usuarios,'categorias' => $categorias]);

    }
    public function create(){
      return view ('usuario.create', ['categorias' => []]);
    }
    public function store(Request $request){
      $usuarios = new User();
      $usuarios->nome = $request->nome;
      $usuarios->email = $request->email;
      $usuarios->senha = $request->senha;
      $usuarios->flAdmin = $request->flAdmin;
    $usuarios->save();

      return redirect ('usuario');
    }

    public function edit (User $usuarios){
      return view ('usuario.edit', ['usuario' => $usuarios,'categorias' => []]);
    }
    public function update(Request $request, User $usuarios){
        $usuarios->nome = $request->nome;
        $usuarios->email = $request->email;
        $usuarios->senha = $request->senha;
        $usuarios->flAdmin = $request->flAdmin;
        $usuarios->save();

      return redirect ('usuario');
    }

    public function destroy (User $usuarios){
      $usuarios->delete();
      return redirect ('usuario');
    }
}
