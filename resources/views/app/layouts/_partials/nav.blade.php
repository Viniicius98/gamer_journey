<div class="game-show-nav custom-font ">
    <ul class="nav nav-underline ">
        @if (request()->routeIs('game.show'))
            <li class="nav-item ">
                <a class="nav-link {{ request()->routeIs('game.index') ? 'active' : '' }}" href="{{ route('game.create',['game'=>$game]) }}">Meus Jogos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('game.create') ? 'active' : '' }}" href="{{ route('game.create')}}">Adicionar Jogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('game.show', ['game' => $game->id]) ? 'active' : '' }}" href="{{ route('game.show', ['game' => $game->id]) }}">Visualizar Jogo </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('app.home') ? 'active' : '' }}" href="{{ route('app.home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('game.index') ? 'active' : '' }}" href="{{ route('game.index') }}">Meus Jogos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('game.create') ? 'active' : '' }}" href="{{ route('game.create')}}">Adicionar Jogo</a>
            </li>
        @endif
    </ul>
</div>
