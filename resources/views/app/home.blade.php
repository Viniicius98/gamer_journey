@extends('app.layouts.basic')



@section('title','Home')

@section('content')
    
    <section id="container-main">
        <section class="menu-up">
            <h3 class="text-home">Ultimos Jogos Zerados</h3>
            <div class="games-list">
                <ul id="lastGames" class="last-games"></ul>
            </div>
        </section>
        <!-- Modal -->
        <section class="menu-up">
            <h3 class="text-home">Jogos com as melhores notas</h3>
            <div class="games-list">
                <ul id="topGames" class="nota-games"></ul>
            </div>
        </section>
        <!-- Modal -->
        <section class="menu-up">
            <h3 class="text-home">Jogos com as piores notas</h3>
            <div class="games-list">
                <ul id="worstGame" class="nota-games"></ul>
            </div>
        </section>
        <!-- Modal -->
    </section>
@endsection

