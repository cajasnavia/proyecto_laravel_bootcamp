@extends('layouts.admin')
@section('titulo','FORMULARIO DE REGISTRO DE PRODUCTO')

@section('contenido2')
                <h1 class="title is-3 has-text-primary titulo-contenido">
                    FORMULARIO DE REGISTRO DE PRODUCTO
                </h1>
                <div class="columns is-centered">
                    <div class="column is-half">
                        <form action="/productos" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="field">
                                <label class="" for="usr">NOMBRE DE PRODUCTO:</label>
                                <div class="control">
                                    <input class="input" type="text" value="{{old('pro_nombre')}}" name="pro_nombre" id="pro_nombre">
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
                                    <input class="input" type="text" value="{{old('pro_precio')}}" name="pro_precio" id="pro_precio">
                                </div>
                                @error('pro_precio')
                                <div class="notification is-danger">
                                    <button class="delete"></button>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="file">
                                <label class="file-label">
                                  <input class="file-input" type="file" name="pro_foto">
                                  <span class="file-cta">
                                    <span class="file-icon">
                                      <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                      Seleccione un archivo…
                                    </span>
                                  </span>
                                </label>
                                @error('pro_foto')
                                <div class="notification is-danger">
                                    <button class="delete"></button>
                                    {{$message}}
                                </div>
                                @enderror

                            </div>
                            <br>
                            <button type="submit" class="button is-primary">Guardar datos</button>
                        </form>
                    </div>
                </div>
@endsection
