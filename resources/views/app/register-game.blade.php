@extends('app.layouts.basic')



@section('title','Registre o jogo')

@section('content')


    <div class="register-form-container">
        <div class="game-register-container">
            <h2 class="custom-font" style="color:#4caf50">{{ $message ?? '' }}</h2>
            <form class="register-form" action="{{route('game.store')}}" method="post">
                @csrf
                <input name="user_id" type="hidden" value={{$user_id}} placeholder="Jogo">
                <input name="game" type="text" placeholder="Jogo">
                <span class="custom-font">{{$errors->has('game')? $errors->first('game'):''}}</span>
                <select name="console_id" >
                    <option value="0">Selecione o console</option>
                    @foreach ($consoles as $console )
                        <option value="{{$console->id}}" {{old('console_id') == $console->id ? 'selected': ''}}>{{$console->console}}</option>
                    @endforeach
                </select>
                <span class="custom-font">{{$errors->has('console_id')? $errors->first('console_id'):''}}</span>
                <input name="start" type="date" placeholder="Data de Inicio">
                <span class="custom-font">{{$errors->has('start')? $errors->first('start'):''}}</span>
                <input name="end" type="date" placeholder="Data de Zeramento">
                <span class="custom-font">{{$errors->has('end')? $errors->first('end'):''}}</span>
                <textarea name="review"  placeholder="Escreva sua review"></textarea>
                <span class="custom-font">{{$errors->has('review')? $errors->first('review'):''}}</span>
                <input name="rating" type="number" min="0" max="10" placeholder="Sua nota">
                <span class="custom-font">{{$errors->has('rating')? $errors->first('rating'):''}}</span>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
