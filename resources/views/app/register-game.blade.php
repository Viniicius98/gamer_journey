@extends('app.layouts.basic')



@section('title','Registre o jogo')

@section('content')


    <div class="register-form-container">
        <h2>Registre seu jogo</h2>
        <h2>{{ $message ?? 'FODACE' }}</h2>
        <form class="register-form" action="{{route('app.register-game.save')}}" method="post">
            @csrf
            <input name="user_id" type="hidden" value="1" placeholder="Jogo">
            <input name="game" type="text" placeholder="Jogo">
            <select name="console_id" >
                <option value="1">Xbox Series S/X</option>
            </select>
            <input name="start" type="date" placeholder="Data de Inicio">
            <input name="end" type="date" placeholder="Data de Zeramento">
            <textarea name="review"  placeholder="Escreva sua review"></textarea>
            <input name="rating" type="number" min="0" max="10" placeholder="Sua nota">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
@endsection
