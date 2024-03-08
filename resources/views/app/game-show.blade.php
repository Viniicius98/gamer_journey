@extends('app.layouts.basic')

@section('title', 'game')

@section('content')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Visualizar game</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('game.index') }}">Voltar</a></li>
                <li><a href="{{ route('game.index') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align:left">
                    <tr>
                        <td>ID:</td>
                        <td>{{$game->id}}</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{$game->game}}</td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td>{{$game->descricao}}</td>
                    </tr>
                    <tr>
                        <td>Peso:</td>
                        <td>{{$game->peso}} kg</td>
                    </tr>
                    <tr>
                        <td>Unidade de Medida:</td>
                        <td>{{$game->unidade_id}}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

@endsection
