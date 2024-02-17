 <header id="header">
      <div class="menu">
        <ul class="nav-bar">
          @component('site.layouts._components.icon')
          @endcomponent
          
          <li name="register"><a href="{{route('site.register')}}">Cadastrar</a></li>
          <li name="contact"><a href="{{route('site.contact')}}">Contato</a></li>
          <li name="about-us"><a href="{{route('site.aboutus')}}">Sobre nos</a></li>
        </ul>
      </div>
</header>