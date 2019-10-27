@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="titulo-secao">
            <p>Pessoas em situação de rua precisando de ajuda:</p>
        </div>

        <div class="cards-situacao-rua">
            <div class="card-pequeno">
                <p class="nome-pessoa">João Paulo</p>
                <br>
                <span class="localizacao-pessoa">vive na região do bairro São Mateus</span>
            </div>

            <div class="card-pequeno">
                <p class="nome-pessoa">Douglas Ferraz</p>
                <br>
                <span class="localizacao-pessoa">vive na região do bairro São Pedro</span>
            </div>

            <div class="card-pequeno">
                <p class="nome-pessoa">Diana Souza</p>
                <br>
                <span class="localizacao-pessoa">vive na região do bairro Morro da Glória</span>
            </div>
        </div>

        <div class="text-center col-sm-12">
            <a href="#" class="link">Ver todos</a>
        </div>


        <div style="margin-top: 10%" class="titulo-secao">
            <p>Instituições na Região:</p>
        </div>

        <div class="cards-instituicoes">

            <div class="card-grande text-center">

                <p class="nome-instituicao">Abrigo Santa Helena de Juiz de Fora</p>

                <img src="{{asset('img/instituicao2.jpg')}}" alt="imagem-instituicao" class="imagem-instituicao">

                <p class="endereco-instituicao">Av. Francisco Valadares, 2745. Vila Ideal</p>

                <a href="{{ URL::to('instituicao/1') }}" class="link">mais informações</a>

            </div>


            <div class="card-grande text-center">

                <p class="nome-instituicao">Amigos Mãos Abertas</p>

                <img src="{{asset('img/instituicao.jpg')}}" alt="imagem-instituicao" class="imagem-instituicao">

                <p class="endereco-instituicao">Eunice Weaver, 164. Carlos Chagas</p>

                <a href="{{ URL::to('instituicao/1') }}" class="link">mais informações</a>

            </div>

        </div>

        <div class="text-center col-sm-12">
            <a href="{{URL::to('instituicao')}}" class="link">Ver todos</a>
        </div>

    </div>
</div>
@endsection
