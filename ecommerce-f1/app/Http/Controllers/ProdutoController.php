<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();//retorna todos os produtos e guarda nessa variavel

      return view('produto.index')->with('produtos',$produtos);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Produto $produto){ // model e variavel
     // dd($produto);
     // retorna só um produto
      //return view('produto.show')->with('produto',$produto);
      $categorias = []; //Categoria::find($produto->CATEGORIA_ID)->Produtos;
      return view ('produto.show', ['produto' =>$produto,'categorias' => $categorias]);

    }
    public function create(){
      return view ('produto.create', ['categorias' => []]);
    }
    public function store(Request $request){
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
      return view ('produto.edit', ['produto' => $produto,'categorias' => []]);
    }
    public function update(Request $request, Produto $produto){
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
      $produto->delete();
      return redirect ('produto');
    }

}
