@extends('site.layouts.basic')

@section('title','Inicio')


@section('content')
   
   <div class="container-login">
      <form class="login-form" action="{{route('site.login')}}" method="post">
         <label class="login-label">Faça o Login</label>
         @csrf
         <input class="login-input" name="user" type="text" placeholder="Usuário" >
         <span class="error-message-login">{{$errors->has('user')? $errors->first('user'):''}}</span>
         <input class="login-input" name="password" type="password" placeholder="Senhas" > 
         <span class="error-message-login">{{$errors->has('password')? $errors->first('password'):''}}</span>
         <button class="login-button">Acessar</button>
      </form>
      
   </div>
<span class="login-span">{{isset($error) && $error != '' ? $error : ''}}</span>
@endsection