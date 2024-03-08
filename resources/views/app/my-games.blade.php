@extends('app.layouts.basic')



@section('title','Meus Jogos')

@section('content')
    <div class="home-link">
        <ul>
            <a href="{{route('game.create')}}"><li>Adicionar Jogo</li></a>
            <a href="{{route('game.index')}}"><li>Procurar Jogo</li></a>
            <a href=""><li>Excluir Jogo</li></a>
        </ul>
        
    </div>
    <div class="my-games">
        <table class="table-styled">
            <thead>
                <tr>
                    <th>Game</th>
                    <th>Console</th>
                    <th>Inicio</th>
                    <th>Fim</th>
                    <th>Review</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                   <tr>
                        <td>{{$game->game}}</td>
                        <td>{{$game->console_id}}</td>
                        <td>{{$game->start}}</td>
                        <td>{{$game->end}}</td>
                        <td>{{$game->review}}</td>
                        <td>{{$game->rating}}</td>
                        <td><a href="{{route('game.show',['game'=>$game->id])}}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$game->id}}" method="post" action="{{route('game.destroy',['game'=>$game->id])}}">
                                        @method('DELETE')
                                        @csrf
                                        {{-- <button type="submit">Excluir</button> --}}
                                        <a href="#" onclick="document.getElementById('form_{{$game->id}}').submit()">Excluir</a>
                                    </form>
                                    
                                </td>
                                <td><a href="{{route('game.edit',['game'=>$game->id])}}">Editar</a></td>
                   </tr>
                @endforeach
            </tbody>
        </table>
        {{ $games->appends($request)->links()}}
        Exibindo {{$games->count()}} Jogos de {{$games->total()}} (de {{$games->firstItem()}} a  {{$games->lastItem()}})
    </div>
@endsection

