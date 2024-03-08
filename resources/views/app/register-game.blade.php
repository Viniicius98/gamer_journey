@extends('app.layouts.basic')



@section('title','Registre o jogo')

@section('content')


    <div class="register-form-container">
        <h2>Registre seu jogo</h2>
        <h2>{{ $message ?? '' }}</h2>
        <form class="register-form" action="{{route('game.store')}}" method="post">
            @csrf
            <input name="user_id" type="hidden" value={{$user_id}} placeholder="Jogo">
            <input name="game" type="text" placeholder="Jogo">
            <span class="error-message">{{$errors->has('game')? $errors->first('game'):''}}</span>
            <select name="console_id" >
                <option value="0">Selecione o console</option>
                @foreach ($consoles as $console )
                    <option value="{{$console->id}}" {{old('console_id') == $console->id ? 'selected': ''}}>{{$console->console}}</option>
                @endforeach
                
            </select>
            <span class="error-message">{{$errors->has('console_id')? $errors->first('console_id'):''}}</span>
            <input name="start" type="date" placeholder="Data de Inicio">
            <span class="error-message">{{$errors->has('start')? $errors->first('start'):''}}</span>
            <input name="end" type="date" placeholder="Data de Zeramento">
            <span class="error-message">{{$errors->has('end')? $errors->first('end'):''}}</span>
            <textarea name="review"  placeholder="Escreva sua review"></textarea>
            <span class="error-message">{{$errors->has('review')? $errors->first('review'):''}}</span>
            <input name="rating" type="number" min="0" max="10" placeholder="Sua nota">
            <span class="error-message">{{$errors->has('rating')? $errors->first('rating'):''}}</span>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
@endsection
