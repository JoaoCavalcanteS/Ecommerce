<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index(){
        $enderecos = Endereco::all();//retorna todos os usuarios e guarda nessa variavel
        $usuario = $this->quemEstaLogado();
        if (!$usuario) return redirect('/user/login');
      return view('endereco.index')->with('endereco',$enderecos)->with('usuario',$usuario);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Endereco $endereco){ // model e variavel

      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('endereco.show', ['endereco' =>$endereco,'categorias' => $categorias,'usuario' => $usuario]);

    }
    public function create(){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('endereco.create', ['categorias' => [],'usuario' => $usuario]);
    }
    public function store(Request $request){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
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
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('endereco.edit', ['enderecos' => $endereco,'categorias' => [],'usuario'=>$usuario]);
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
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      $endereco->delete();
      return redirect ('endereco');
    }
}
