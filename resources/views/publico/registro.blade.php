@extends('layouts.publico')

@section('titulo','FORMULARIO DE AUTENTICACIÓN')

@section('contenido')
<div class="columns box-container">
    <div class="column is-6 is-offset-3 has-text-white">
        <br>
        <div class="has-text-centered">
            <img class="img-80" src="/img/laravel-bootcamp.png">
        </div>
        <br>
        <h2 class="title is-3 has-text-centered has-text-white">REGISTRO DE USUARIO</h2>
        <small>
            Todos los campos son obligatorios
        </small>
        <form action="">
            <div class="columns">
            <div class="column is-6">
                <div class="field">
                    <label class="has-text-white" for="usr">NOMBRES:</label>
                    <div class="control">
                        <input class="input" type="text" name="usr" id="usr" placeholder="Ramiro">
                    </div>
                </div>
                <div class="field">
                    <label class="has-text-white" for="usr">APELLIDOS:</label>
                    <div class="control">
                        <input class="input" type="text" name="usr" id="usr" placeholder="Farfan Quispe">
                    </div>
                </div>
                <div class="field">
                    <label class="has-text-white" for="usr">EMAIL:</label>
                    <div class="control">
                        <input class="input" type="text" name="usr" id="usr" placeholder="usuario@gmail.com">
                    </div>
                </div>
            </div>
            <div class="column is-6">
                <div class="field">
                    <label class="has-text-white" for="usr">USUARIO:</label>
                    <div class="control">
                        <input class="input" type="text" name="usr" id="usr" placeholder="usuario">
                    </div>
                </div>
                <div class="field">
                    <label class="has-text-white" for="usr">DEFINA SU PASSWORD:</label>
                    <div class="control">
                        <input class="input" type="text" name="pwd" id="pwd" placeholder="contraseña">
                    </div>
                </div>
                <div class="field">
                    <label class="has-text-white" for="usr">REPITA EL PASSWORD:</label>
                    <div class="control">
                        <input class="input" type="text" name="pwd" id="re_pwd" placeholder="contraseña">
                    </div>
                </div>
            </div>
        </div>
        <button class="button is-primary">Registrarme</button>
    </form>
    </div>
</div>

@endsection
