@extends('site.layouts.basic')

@section('title','Inicio')


@section('content')
   <h1 class='text-title-index'>Inicie sua Jornada</h1>
   <div class='index-container'>
       
            <div class='r-container'>
                <a href="{{route('site.login')}}"><button >Login</button></a>
            </div>
       
            <div class='l-container'>
                <a href="{{route('site.register')}}"><button >Cadastre-se</button></a>
            </div>
        
   </div>
    
@endsection