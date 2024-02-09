<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Your Journey - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/global.css')}}">
        <link rel="stylesheet" href="{{asset('css/site/register.css')}}">
    </head>

    <body>

        @include('site.layouts._partials.top')
        @yield('content')
        @include('site.layouts._partials.bottom')

       
    </body>
   <script src="{{asset('js/index.js')}}"></script>
</html>