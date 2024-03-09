<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Your Journey - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/global.css')}}">
        <link rel="stylesheet" href="{{asset('css/_components/logo.css')}}">
        <link rel="stylesheet" href="{{asset('css/app/_partials/_partials.css')}}">
        <link rel="stylesheet" href="{{asset('css/app/home.css')}}">
        <link rel="stylesheet" href="{{asset('css/app/register-game.css')}}">
        <link rel="stylesheet" href="{{asset('css/app/my-games.css')}}">
        <link rel="stylesheet" href="{{asset('css/app/game-show.css')}}">
        <link rel="stylesheet" href="{{asset('css/app/game-edit.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="icon" href="{{asset('img/icon.ico')}}" type="image/x-icon">
        <!-- No cabeçalho do seu documento HTML (adapte o URL conforme necessário) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
       
    </head>

    <body>

        @include('app.layouts._partials.top')
        @include('app.layouts._partials.nav')
        @yield('content')
        @include('site.layouts._partials.bottom')
        
    </body>

</html>