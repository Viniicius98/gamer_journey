@extends('app.layouts.basic')



@section('title','Home')

@section('content')
    <div class="home-link">
        <ul>
            <a href="{{route('game.create')}}"><li>Adicionar Jogo</li></a>
            <a href="{{route('game.index')}}"><li>Procurar Jogo</li></a>
            <a href="{{route('game.edit')}}"><li>Excluir Jogo</li></a>
        </ul>
    
    </div>
    
@endsection

