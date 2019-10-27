@extends('layouts.app')

@section('content')
    <div class="container" id="pagina-instituicao">
        <div class="row justify-content-center">

            <div class="titulo-pagina">
                <p>Abrigo Santa Helena de Juiz de Fora</p>
            </div>


            <div class="text-center">
                <img src="{{asset('img/instituicao2.jpg')}}" alt="">
            </div>
        </div>


        <div class="secao mt-5 ml-3">
            <p class="titulo">
                <span class="borda-embaixo">Como chegar</span>
            </p>

            <p class="texto ml-4">
                Av. Francisco Valadares, 2745. Vila Ideal
            </p>

            <p class="texto ml-4">
                CEP: 36020420
            </p>

            <div class="text-center">
                <a href="#" class="link">Ver no Google Maps</a>
            </div>
        </div>


        <div class="secao mt-5 ml-3">
            <p class="titulo">
                <span class="borda-embaixo">Informações para contato</span>
            </p>

            <p class="texto ml-4">
                Telefone: 32-32351048
            </p>

            <p class="texto ml-4">
                Email: abrigojf@yahoo.com.br
            </p>

        </div>

    </div>
@endsection
