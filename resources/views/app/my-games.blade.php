@extends('app.layouts.basic')



@section('title','Meus Jogos')

@section('content')
    <div class="my-games">
        <table class="table table-hover">
            <thead class="table-light">
              <tr>
                    <th>Game</th>
                    <th>Console</th>
                    <th>Inicio</th>
                    <th>Fim</th>
                    <th>Review</th>
                    <th>Nota</th>
                    <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                <tr class="">
                     <td>{{$game->game}}</td>
                     <td>{{$game->consoles->console}}</td>
                     <td>{{date('d/m/Y',strtotime($game->start))}}</td>
                     <td>{{date('d/m/Y',strtotime($game->end))}}</td>
                     <td>{{$game->review}}</td>
                     <td>{{$game->rating}}</td>
                     <td class="table-success"><a class="no-underline"  style="color: black; font-weight:bold;font-size:14px" href="{{route('game.show',['game'=>$game->id])}}">Visualizar</a></td>
                </tr>
             @endforeach
            </tbody>
          </table> 
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="{{ $games->previousPageUrl() }}">Voltar</a></li>
                @for($i = 1; $i <= $games->lastPage(); $i++)
                    <li class="page-item {{ $games->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $games->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor  
                <li class="page-item"><a class="page-link" href="{{ $games->nextPageUrl() }}">Avançar</a></li>
            </ul>
        </nav>
    </div>
    
@endsection

