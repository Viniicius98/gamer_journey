@extends('app.layouts.basic')

@section('title', 'game')

@section('content')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Editar game</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('game.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('game.update', ['game' => $game->id]) }}">
                    @csrf
                    @method('PUT')
                    <input name="user_id" type="hidden" value={{$user_id}} placeholder="Jogo">
                    <input value="{{$game->game}}" name="game" type="text" placeholder="Jogo">
                    <span class="error-message">{{$errors->has('game')? $errors->first('game'):''}}</span>
                    <select name="console_id" >
                        <option value="0">Selecione o console</option>
                        @foreach ($consoles as $console )
                            <option value="{{$console->id}}" {{$game->console_id ?? old('console_id') == $console->id ? 'selected': ''}}>{{$console->console}}</option>
                        @endforeach
                        
                    </select>
                    <span class="error-message">{{$errors->has('console_id')? $errors->first('console_id'):''}}</span>
                    <input name="start" value="{{$game->start}}" type="date" placeholder="Data de Inicio">
                    <span class="error-message">{{$errors->has('start')? $errors->first('start'):''}}</span>
                    <input name="end" value="{{$game->end}}" type="date" placeholder="Data de Zeramento">
                    <span class="error-message">{{$errors->has('end')? $errors->first('end'):''}}</span>
                    <textarea name="review" value="{{$game->review}}" placeholder="Escreva sua review">{{$game->review}}</textarea>
                    <span class="error-message">{{$errors->has('review')? $errors->first('review'):''}}</span>
                    <input name="rating" value="{{$game->rating}}" type="number" min="0" max="10" placeholder="Sua nota">
                    <span class="error-message">{{$errors->has('rating')? $errors->first('rating'):''}}</span>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
