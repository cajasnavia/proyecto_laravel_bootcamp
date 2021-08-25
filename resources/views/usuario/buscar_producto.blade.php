@extends('layouts.usuario')
@section('titulo','PANEL DE BIENVENIDA')

@section('contenido2')
<div class="columns">
    <div class="column is-12">

        <h1 class="title is-3 has-text-primary titulo-contenido">
            COMPRA DE PRODUCTOS
        </h1>

        <div class="columns">
            <div class="column is-8 is-offset-2 has-text-centered">
                <h1 class="title is-4">BUSCAR PRODUCTOS</h1>
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
            <div class="column is-10 is-offset-1">
                <article class="media has-background-light box-rounded box-result">
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
                              &lt;<small>  Categoria: </small> <small>NOMBRE CATEGORIA</small>&gt;
                          </h4> 
                          <p>
                            <span class="has-text-primary">STOCK:</span>
                            <span>300 UNIDADES</span>
                            <br>
                            <span class="has-text-primary">PRECIO UNITARIO:</span>
                            <span>20 Bs</span>
                            <br>
                            <form>
                            <div class="field has-addons">
                                <div class="control">
                                  <input required min="0" max="10" class="input" type="number" placeholder="Cantidad">
                                </div>
                                <div class="control">
                                  <a class="button is-primary">
                                    Agregar al carrito
                                  </a>
                                </div>
                              </div>
                            </form>  
                          </p>
                        </p>
                    </div>
                    </div>
                </article>                
            </div>
        </div>


    </div>
</div>


<div class="modal" id="dialogo">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Modal title</p>
        </header>
        <section class="modal-card-body">
          <!-- Content ... -->
          <div class="content">
            <p>Esta seguro de eliminar el siguiente registro:</p>
            <h3 class="has-text-centered">
               <span class="has-text-info"> PRODUCTO:</span>
                <span id="prod_nombre"></span>
            </h3>
        </div>
        </section>
        <footer class="modal-card-foot">
            <form id="form_delete" action="" method="POST">
                @method('DELETE')
                @csrf
                <input type="hidden" id="prod_id" name="prod_id" value="">
                <button class="button is-danger">Eliminar</button>
                <button class="button cerrar-dialogo">Cancelar</button>
            </form>
        </footer>
      </div>
</div>


@endsection
