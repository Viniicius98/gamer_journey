<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Your Journey - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="icon" href="{{asset('img/icon.ico')}}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>

    <body>

        @include('app.layouts._partials.top')
        @include('app.layouts._partials.nav')
        @yield('content')
        @include('site.layouts._partials.bottom')
        
    </body>

</html>