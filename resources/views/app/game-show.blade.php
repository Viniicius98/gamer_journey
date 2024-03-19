@extends('app.layouts.basic')

@section('title', 'Meu Jogo')

@section('content')

    <div class="game-show-edit">
        <div class="page-information">
            <div class="card w-50 ">
                <div class="card-header">
                    {{$game->game}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Console: {{$game->consoles->console}}</h5>
                    <p class="card-text">Iniciado em: {{date('d/m/Y',strtotime($game->start))}}</p>
                    <p class="card-text">Zerado em: {{date('d/m/Y',strtotime($game->end))}}</p>
                    <p class="card-text">Nota: {{$game->rating}}</p>
                    <p class="card-text">{{$game->review}}</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('game.edit', ['game' => $game->id]) }}" class="btn btn-primary mx-2">Editar</a>
                        <form id="form_{{$game->id}}" method="post" action="{{ route('game.destroy', ['game' => $game->id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger mx-2">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
