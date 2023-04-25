<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();//retorna todos os produtos e guarda nessa variavel

      return view('produto.index')->with('produtos',$produtos);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Usuario $usuarios){ // model e variavel
     // dd($produto);
     // retorna só um produto
      //return view('produto.show')->with('produto',$produto);
      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      return view ('usuario.show', ['usuario' =>$usuarios,'categorias' => $categorias]);

    }
    public function create(){
      return view ('usuario.create', ['categorias' => []]);
    }
    public function store(Request $request){
      $usuarios = new Usuario();
      $usuarios->nome = $request->nome;
      $usuarios->email = $request->email;
      $usuarios->senha = $request->senha;
      $usuarios->flAdmin = $request->flAdmin;
      $usuarios->save();

      return redirect ('produto');
    }

    public function edit (Usuario $usuarios){
      return view ('usuario.edit', ['usuario' => $usuarios,'categorias' => []]);
    }
    public function update(Request $request, Usuario $usuarios){
        $usuarios->nome = $request->nome;
        $usuarios->email = $request->email;
        $usuarios->senha = $request->senha;
        $usuarios->flAdmin = $request->flAdmin;
      $produto->save();

      return redirect ('produto');
    }

    public function destroy (Usuario $usuarios){
      $usuarios->delete();
      return redirect ('produto');
    }
}
