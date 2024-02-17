@extends('site.layouts.basic')

@section('title','Cadastrar')


@section('content')
    
    <div class="container-form">
        <div class="title-container">
            <h2 class="title-text">Registre-se para iniciar sua jornada</h2>
        </div>
        <form class = "forms">
            <label class="label-text"> Nome </label>
            <input class="input-form" name= "name" type="text" placeholder="Digite seu nome">
            <br>
            <label class="label-text"> Data de nascimento </label>
            <input class="input-form" name= "birthdate" type="date" placeholder= "Digite sua data de nascimento">
            <br>
            <label class="label-text"> Idade </label>
            <input class="input-form" name= "age" type="number" placeholder = "Digite sua idade">
            <br>
            <label class="label-text">Console preferido</label>
            <select class="select-form" name="pref_console">
                <option>Xbox Series S/X </option>
                <option>Playstation 5 </option>
                <option>Nintendo Switch </option>
            </select>
            <br>
            <label class="label-text">Sexo</label>
            <select class="select-form" name="gender">
                <option>Homem</option>
                <option>Mulher</option>
            </select>
            <br>
            <label class="label-text">Email</label>
            <input class="input-form" name="email" type="text" placeholder="Digite seu E-mail">
            <br>
            <label class="label-text">Senha</label>
            <input class="input-form"  name="password" type="password" placeholder="Digite sua senha">
            <button id="button-form" type="submit">Cadastrar</button>
        </form>

        
    </div>
@endsection