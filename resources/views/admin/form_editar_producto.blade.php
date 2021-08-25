@extends('layouts.admin')
@section('titulo','FORMULARIO DE REGISTRO DE PRODUCTO')

@section('contenido2')
                <h1 class="title is-3 has-text-primary titulo-contenido">
                    FORMULARIO DE EDICION DE PRODUCTO
                </h1>
                <div class="columns is-centered">
                    <div class="column is-half">
                        <form action="/productos/{{$producto->pro_id}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="field">
                                <label class="" for="usr">NOMBRE DE PRODUCTO:</label>
                                <div class="control">
                                    <input class="input" type="text" value="{{old('pro_nombre', $producto->pro_nombre)}}" name="pro_nombre" id="pro_nombre">
                                </div>
                                @error('pro_nombre')
                                <div class="notification is-danger">
                                    <button class="delete"></button>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="" for="usr">PRECIO DEL PRODUCTO:</label>
                                <div class="control">
                                    <input class="input" type="text" value="{{old('pro_precio', $producto->pro_precio)}}" name="pro_precio" id="pro_precio">
                                </div>
                                @error('pro_precio')
                                <div class="notification is-danger">
                                    <button class="delete"></button>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="button is-primary">Guardar datos</button>
                        </form>
                    </div>
                </div>
@endsection
