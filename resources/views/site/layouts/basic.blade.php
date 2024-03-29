<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Your Journey - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="icon" href="{{asset('img/icon.ico')}}" type="image/x-icon">
        <!-- No cabeçalho do seu documento HTML (adapte o URL conforme necessário) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>

    <body>

        @include('site.layouts._partials.top')
        @yield('content')
        @include('site.layouts._partials.bottom')
        
    </body>
   <script src="{{asset('js/index.js')}}"></script>
</html>