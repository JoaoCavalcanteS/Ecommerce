<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index(){
        $enderecos = Endereco::all();//retorna todos os usuarios e guarda nessa variavel

      return view('endereco.index')->with('endereco',$enderecos);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Endereco $endereco){ // model e variavel

      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      return view ('endereco.show', ['endereco' =>$endereco,'categorias' => $categorias]);

    }
    public function create(){
      return view ('endereco.create', ['categorias' => []]);
    }
    public function store(Request $request){
      $endereco = new Endereco();
      $endereco->usuarioId = $request->usuarioId;
      $endereco->endereco = $request->endereco;
      $endereco->cep = $request->cep;
      $endereco->numResidencia = $request->numResidencia;
      $endereco->complemento = $request->complemento;
    $endereco->save();

      return redirect ('endereco');
    }

    public function edit (Endereco $endereco){
      return view ('endereco.edit', ['enderecos' => $endereco,'categorias' => []]);
    }
    public function update(Request $request, Endereco $endereco){
        $endereco->usuarioId = $request->usuarioId;
        $endereco->endereco = $request->endereco;
        $endereco->cep = $request->cep;
        $endereco->numResidencia = $request->numResidencia;
        $endereco->complemento = $request->complemento;
    $endereco->save();


      return redirect ('endereco');
    }

    public function destroy (Endereco $endereco){
      $endereco->delete();
      return redirect ('endereco');
    }
}
