@extends('layouts.publico')

@section('titulo','FORMULARIO DE AUTENTICACIÓN')

@section('contenido')

<div class="columns box-container">
    <div class="column is-8 is-offset-2">
        <div class="columns">
            <div class="column is-8 is-offset-2 has-text-centered">
                <br>
                <img class="img-80 " src="/img/laravel-bootcamp.png">
                <br>
                <br>
                <div class="field has-addons">
                    <p class="control">
                      <span class="select">
                        <select>
                          <option>Todas</option>
                          <option>Categoria 1</option>
                          <option>Cat 2</option>
                          <option>Cat 3</option>
                          <option>Cat 4</option>
                        </select>
                      </span>
                    </p>
                    <p class="control is-expanded">
                      <input class="input" type="text" placeholder="Realizar una busqueda">
                    </p>
                    <p class="control">
                      <button type="submit" class="button is-primary">
                        Buscar
                      </button>
                    </p>
                  </div>
            </div>
        </div>
        <div class="columns">
            <div class="column is-12">
                <article class="media has-background-white box-rounded box-result">
                    <figure class="media-left">
                      <p class="image is-128x128">
                        <img src="{{asset('storage/foto_productos/default_foto_producto.png')}}">
                      </p>
                    </figure>
                    <div class="media-content">
                      <div class="content">
                        <p>
                            <h4>
                              NOMBRE DEL PRODUCTO
                              <small>CATEGORIA: </small> <small>NOMBRE CATEGORIA</small>
                          </h4> 
                          <p>
                            <span class="has-text-primary">STOCK:</span>
                            <span>300 UNIDADES</span>
                            <br>
                            <span class="has-text-primary">PRECIO UNITARIO:</span>
                            <span>20 Bs</span>
                            <br>
                            <button class="button is-primary">Agregar al carrito</button>
                          </p>
                        </p>
                    </div>
                    </div>
                  </article>                
            </div>
        </div>
    </div>
</div>

@endsection
