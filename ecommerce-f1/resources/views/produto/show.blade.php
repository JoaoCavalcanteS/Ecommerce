@extends('layout.app')
    @section('main')

    <main>
        <div class="content">
            <div class="left-side">
                <h1>{{$produto->nome}}</h1>

                <p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$produto->descricao}}</li>
                    </ul>
                </p>
                <span>Quantidade disponivel:{{$produto->qtdEstoque}}</span>
                <span>Valor original:R${{$produto->valor}} </span>
            
                <span>Valor do produto com desconto: R${{$produto->valor - 10}}</span><br><br><br>

                <a class="btn btn-primary" href="#" role="button">ADICIONAR AO CARRINHO</a>


            </div>

            <div class="right-side">
                <div class="img"> <img src="{{$produto->produtoImagem}}"></div>
            </div>
        </div>
    </main>
</body>

@endsection
