@php
    $name = session('name', '');
    $email = session('email', '');
@endphp
 
 
 <div class="top-container-user">
      <div class="menu-user">
        <ul class="nav-bar">
          @component('_components.logo')
          @endcomponent
          <p class="home-welcome">Bem vindo {{$name}}</p>
          <li name="home"><a href="{{route('app.home')}}">Home</a></li>
          <li name="register-game"><a href="{{route('game.index')}}">Meus Jogos</a></li>
          <li name="logout"><a href="{{route('app.logout')}}">Sair</a></li>
        </ul>
      </div>
</div>