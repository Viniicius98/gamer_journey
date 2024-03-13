@extends('site.layouts.basic')

@section('title','Inicio')


@section('content')
   
   <div class="container-login">
      <form  action="{{route('site.login')}}" method="post">
         <label >Faça o Login</label>
         @csrf
         <input  name="user" type="text" placeholder="Usuário" >
         <span >{{$errors->has('user')? $errors->first('user'):''}}</span>
         <input  name="password" type="password" placeholder="Senha" > 
         <span >{{$errors->has('password')? $errors->first('password'):''}}</span>
         <button >Acessar</button>
      </form>
      
   </div>
<span class="message-login">{{isset($error) && $error != '' ? $error : ''}}</span>
@endsection