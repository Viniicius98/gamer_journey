@extends('site.layouts.basic')

@section('title','Contato')


@section('content')
   <h1 class='text-title2'>Fale com a gente </h1>
   <div class='contact-container'>
        
        <div class='contact-email'>
            <img src="{{asset('img/mail.png')}}">
            <h2 class='text-title'>E-mail</h2>
            <p>Tem alguma dúvida? Mande-nos um email</p>
            <p class='text-bold'><a href='mailto:gamejourney@dominio.com.br'>gamejourney@dominio.com.br</a></p>
        </div>

        <div class='contact-social-media'>
            <img class='social-media-img' src="{{asset('img/social-media.png')}}">
            <h2 class='text-title'>Redes sociais</h2>
            <p>Voce pode entrar em contato pelas nossas redes sociais</p>
            <a href='{{route('site.contact')}}'><img src="{{asset('img/facebook.png')}}"></a>
            <a href='https://www.linkedin.com/in/viniciusssilva98/'><img src="{{asset('img/linkedin.png')}}"></a>
            <a href='{{route('site.contact')}}'><img src="{{asset('img/youtube.png')}}"></a>
        </div>

        <div class='contact-chat'>
            <img src="{{asset('img/chat.png')}}">
            <h2 class='text-title'>Chat</h2>
            <p>Precisa tirar dúvida agora?</p>
            <p class='text-bold'><a href='{{route('site.contact')}}'>Basta abrir o chat</a></p>
        </div>
   </div>
    
@endsection