@extends('site.layouts.basic')

@section('title','Cadastrar')


@section('content')
    
    <div class="container-form">
        <div class="title-container">
            <h2 class="title-text">Registre-se para iniciar sua jornada</h2>
        </div>
        <form  action={{route('site.register')}} method='post'>
            @csrf
            <label > Nome </label>
            <input  name= "name" type="text" placeholder="Digite seu nome">
            <span >{{$errors->has('name')? $errors->first('name'):''}}</span>
            <br>
            <label > Data de nascimento </label>
            <input  name= "birth" type="date" placeholder= "Digite sua data de nascimento">
            <span >{{$errors->has('birth')?$errors->first('birth'):''}}</span>
            <br>
            <label > Idade </label>
            <input  name= "age" type="number" placeholder = "Digite sua idade">
            <span >{{$errors->has('age')? $errors->first('age'):''}}</span>
            <br>
            <label >Console preferido</label>
            <select name="pref_console">
                <option value="">Escolha seu console preferido</option>
                @foreach ( $console  as $key => $consoles )

                <option value="{{$consoles->id}}">{{$consoles->console}}</option>

                @endforeach
            </select>
            <span >{{$errors->has('pref_console')? $errors->first('pref_console'):''}}</span>
            <br>
            <label >Sexo</label>
            <select name="gender">
                <option value="">Qual seu genero</option>
                <option value="man">Homem</option>
                <option value="woman">Mulher</option>
            </select>
            <span >{{$errors->has('gender')? $errors->first('gender'):''}}</span>
            <br>
            <label >Email</label>
            <input  name="email" type="text" placeholder="Digite seu E-mail">
             <span >{{$errors->has('email')? $errors->first('email'):''}}</span>
            <br>
            <label >Senha</label>
            <input name="password" type="password" placeholder="Digite sua senha">
             <span >{{$errors->has('password')? $errors->first('password'):''}}</span>
            <button id="button-form" type="submit">Cadastrar</button>
        </form>
    </div>
@endsection