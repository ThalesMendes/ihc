@extends('layouts.app')

@section('content')
    <div class="container" id="pagina-todas-instituicoes">

        <div class="titulo-pagina">
            <p>Todas as Instituições em Juiz de Fora</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($instituicoes as $instituicao)
                <div class="card-medio">
                    <p class="nome"> {{$instituicao->nome}} </p>
                    <hr>
                    <p class="endereco"> {{$instituicao->endereco}} </p>

                    <div class="text-center">
                        <a class="link" href="#">mais informações</a>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="paginacao">
            <p>Páginas</p>
            {{$instituicoes->links()}}
        </div>

    </div>
@endsection
