@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="titulo-secao">
            <p>Pessoas em situação de rua precisando de ajuda:</p>
        </div>

        <div class="cards-situacao-rua">
            @foreach($pessoas as $pessoa)
                <div class="card-pequeno">
                    <p class="nome-pessoa">{{$pessoa->nome}}</p>
                    <br>
                    <span class="localizacao-pessoa">vive na região do bairro {{$pessoa->regiao}}</span>
                </div>
            @endforeach
        </div>

        <div class="text-center col-sm-12">
            <a href="#" class="link">Ver todos <i class="fas fa-arrow-right"></i></a>
        </div>


        <div style="margin-top: 10%" class="titulo-secao">
            <p>Instituições na Região:</p>
        </div>

        <div class="cards-instituicoes">

            @foreach($instituicoes as $index => $instituicao)

                <div class="card-grande text-center">

                    <p class="nome-instituicao">{{$instituicao->nome}}</p>

                    <img src="{{$index == 0 ? asset('img/instituicao2.jpg') : asset('img/instituicao.jpg')}}" alt="imagem-instituicao" class="imagem-instituicao">

                    <p class="endereco-instituicao">{{$instituicao->endereco}}</p>

                    <a href="{{ URL::to('instituicao/1') }}" class="link">mais informações</a>

                </div>

            @endforeach

        </div>

        <div class="text-center col-sm-12">
            <a href="{{URL::to('instituicao')}}" class="link"> Ver todos <i class="fas fa-arrow-right"></i></a>
        </div>

    </div>
</div>
@endsection
