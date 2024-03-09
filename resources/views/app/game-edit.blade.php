@extends('app.layouts.basic')

@section('title', 'Editar')

@section('content')
    <div class="game-edit">
        <div class="game-edit-container">
            <form method="post" class="edit-form" action="{{ route('game.update', ['game' => $game->id]) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <input name="user_id" type="hidden" value={{$user_id}} placeholder="Jogo">
                  <label  class="form-label ">Jogo</label>
                  <input value="{{$game->game}}" name="game" type="text" placeholder="Jogo" class="form-control " >
                  <span class="error-message">{{$errors->has('game')? $errors->first('game'):''}}</span>
                </div>
                <label for="exampleInputPassword1" class="form-label">Console</label>
                <select class="form-select " name="console_id">
                    <option selected>Escolha o Console</option>
                    @foreach ($consoles as $console )
                    <option value="{{$console->id}}" {{$game->console_id ?? old('console_id') == $console->id ? 'selected': ''}}>{{$console->console}}</option>
                    @endforeach
                </select>
                <span class="error-message">{{$errors->has('console_id')? $errors->first('console_id'):''}}</span>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label mt-3">Data de Inicio</label>
                    <input name="start" value="{{$game->start}}" type="date" placeholder="Data de Inicio" class="form-control " >
                    <span class="error-message">{{$errors->has('start')? $errors->first('start'):''}}</span>
                  </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Data de Zeramento</label>
                    <input name="end" value="{{$game->end}}" type="date" placeholder="Data de Inicio" class="form-control " >
                    <span class="error-message">{{$errors->has('end')? $errors->first('end'):''}}</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Review</label>
                    <textarea class="form-control " name="review" value="{{$game->review}}" placeholder="Escreva sua review" rows="3">{{$game->review}}</textarea>
                    <span class="error-message">{{$errors->has('review')? $errors->first('review'):''}}</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nota</label>
                    <input name="rating" value="{{$game->rating}}" type="number" min="0" max="10" placeholder="Sua nota" class="form-control  " >
                    <span class="error-message">{{$errors->has('rating')? $errors->first('rating'):''}}</span>
                </div>
                
                <button type="submit" class="btn btn-primary mb-3 ">Atualizar</button>
            </form>
            
        </div>
    </div>
@endsection
