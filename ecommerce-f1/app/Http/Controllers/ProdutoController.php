<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();//retorna todos os produtos e guarda nessa variavel
        $usuario = $this->quemEstaLogado();
        if (!$usuario) return redirect('/user/login');

      return view('produto.index')->with('produtos',$produtos)->with('usuario', $usuario);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Produto $produto){ // model e variavel

      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('produto.show', ['produto' =>$produto,'categorias' => $categorias, 'usuario' => $usuario]);

    }
    public function create(){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('produto.create', ['usuario' => $usuario, 'categorias' => []]);
    }
    public function store(Request $request){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');

      $produto = new Produto();
      $produto->nome = $request->nome;
      $produto->descricao = $request->descricao;
      $produto->tamanho = $request->tamanho;
      $produto->cor = $request->cor;
      $produto->qtdEstoque = $request->qtdEstoque;
      $produto->valor = $request->valor;
      $produto->marca = $request->marca;
      $produto->produtoImagem = $request->produtoImagem;
      $produto->save();

      return redirect ('produto');
    }

    public function edit (Produto $produto){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      return view ('produto.edit', ['usuario' => $usuario, 'produto' => $produto,'categorias' => []]);
    }
    public function update(Request $request, Produto $produto){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');

      $produto->nome = $request->nome;
      $produto->descricao = $request->descricao;
      $produto->tamanho = $request->tamanho;
      $produto->cor = $request->cor;
      $produto->qtdEstoque = $request->qtdEstoque;
      $produto->valor = $request->valor;
      $produto->marca = $request->marca;
      $produto->produtoImagem = $request->produtoImagem;
      $produto->save();

      return redirect ('produto');
    }

    public function destroy (Produto $produto){
      $usuario = $this->quemEstaLogado();
      if (!$usuario) return redirect('/user/login');
      $produto->delete();
      return redirect ('produto');
    }

}
