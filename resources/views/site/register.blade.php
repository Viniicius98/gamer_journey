@extends('site.layouts.basic')

@section('title','Cadastrar')


@section('content')
    
    <div class="container-form">
        <div class="title-container">
            <h2 class="title-text">Registre-se para iniciar sua jornada</h2>
        </div>
        <form class="forms" action={{route('site.register')}} method='post'>
            @csrf
            <label class="label-text"> Nome </label>
            <input class="input-form" name= "name" type="text" placeholder="Digite seu nome">
            <span class="error-message">{{$errors->has('name')? $errors->first('name'):''}}</span>
            <br>
            <label class="label-text"> Data de nascimento </label>
            <input class="input-form" name= "birth" type="date" placeholder= "Digite sua data de nascimento">
            <span class="error-message">{{$errors->has('birth')?$errors->first('birth'):''}}</span>
            <br>
            <label class="label-text"> Idade </label>
            <input class="input-form" name= "age" type="number" placeholder = "Digite sua idade">
            <span class="error-message">{{$errors->has('age')? $errors->first('age'):''}}</span>
            <br>
            <label class="label-text">Console preferido</label>
            <select class="select-form" name="pref_console">
                <option value="">Escolha seu console preferido</option>
                @foreach ( $console  as $key => $consoles )

                <option value="{{$consoles->id}}">{{$consoles->console}}</option>

                @endforeach
            </select>
            <span class="error-message">{{$errors->has('pref_console')? $errors->first('pref_console'):''}}</span>
            <br>
            <label class="label-text">Sexo</label>
            <select class="select-form" name="gender">
                <option value="">Qual seu genero</option>
                <option value="man">Homem</option>
                <option value="woman">Mulher</option>
            </select>
            <span class="error-message">{{$errors->has('gender')? $errors->first('gender'):''}}</span>
            <br>
            <label class="label-text">Email</label>
            <input class="input-form" name="email" type="text" placeholder="Digite seu E-mail">
             <span class="error-message">{{$errors->has('email')? $errors->first('email'):''}}</span>
            <br>
            <label class="label-text">Senha</label>
            <input class="input-form"  name="password" type="password" placeholder="Digite sua senha">
             <span class="error-message">{{$errors->has('password')? $errors->first('password'):''}}</span>
            <button id="button-form" type="submit">Cadastrar</button>
        </form>
    </div>
@endsection