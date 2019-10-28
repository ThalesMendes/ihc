@extends('layouts.app')

@section('content')
    <div class="container" id="pagina-todas-instituicoes">

        <div class="titulo-pagina">
            <p>Todas as pessoas em Juiz de Fora</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($pessoas as $pessoa)
                <div class="card-medio">
                    <p class="nome"> {{$pessoa->nome}} </p>
                    <hr>
                    <p class="endereco">Vive próximo à região de {{$pessoa->regiao}} </p>

                    <div class="text-center">
                        <a class="link" href="#">mais informações</a>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="paginacao">
            <p>Páginas</p>
            {{$pessoas->links()}}
        </div>

    </div>
@endsection
