@extends('app.layouts.basic')



@section('title','Home')

@section('content') 
    <section id="container-main">
        <section class="menu-up">
            <h3 class="text-home">Ultimos Jogos Zerados</h3>
            <div class="games-list">
                <ul id="lastGames" class="last-games">
                    @foreach ( $lastGames as $lastGame)
                        <li><a class="no-underline" href="{{route('game.show',['game'=>$lastGame->id])}}">{{$lastGame->game}}</a></li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- Modal -->
        <section class="menu-up">
            <h3 class="text-home">Jogos com as melhores notas</h3>
            <div class="games-list">
                <ul id="topGames" class="nota-games">
                    @foreach ( $bestGames as $bestGame)
                        <li><a class="no-underline" href="{{route('game.show',['game'=>$bestGame->id])}}">{{$bestGame->game}}</a></li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- Modal -->
        <section class="menu-up">
            <h3 class="text-home">Jogos com as piores notas</h3>
            <div class="games-list">
                <ul id="worstGame" class="nota-games">
                    @foreach ( $worstGames as $worstGame)
                        <li><a class="no-underline" href="{{route('game.show',['game'=>$worstGame->id])}}">{{$worstGame->game}}</a></li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- Modal -->
    </section>
@endsection

