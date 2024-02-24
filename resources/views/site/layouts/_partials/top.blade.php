 <header id="header">
      <div class="menu">
        <ul class="nav-bar">
          @component('_components.logo')
          @endcomponent
          <li name="index"><a href="{{route('site.index')}}">Inicio</a></li>
          <li name="contact"><a href="{{route('site.contact')}}">Contato</a></li>
          <li name="about-us"><a href="{{route('site.aboutus')}}">Sobre nos</a></li>
        </ul>
      </div>
</header>