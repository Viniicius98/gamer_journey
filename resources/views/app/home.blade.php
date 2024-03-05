@extends('app.layouts.basic')



@section('title','Home')

@section('content')
    <div class="home-link">
        <ul>
            <a href="{{route('game.create')}}"><li>Adicionar Jogo</li></a>
            <a href="{{route('game.index')}}"><li>Procurar Jogo</li></a>
            <a href=""><li>Excluir Jogo</li></a>
        </ul>
    
    </div>
    <section id="container-main">
        
        <section class="menu-up">
            <h3 class="text-home">Ultimos Jogos Zerados</h3>
            <div class="games-list">
                <ul id="lastGames" class="last-games">
                    @foreach ( $lastGames as $lastGame)
                        <li>{{$lastGame->game}}</li>
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
                        <li>{{$bestGame->game}}</li>
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
                        <li>{{$worstGame->game}}</li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- Modal -->
    </section>
@endsection

