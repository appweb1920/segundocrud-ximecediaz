@extends('layouts.homeView')

@section('content')

<div class="row">
        <form class="col s12" action="/add" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6"><input placeholder="Nombre" id="first_name" type="text" class="validate" name="nombre">
                    <label for="first_name">Nombre de pieza</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6"><input placeholder="Breve descripción" id="textpiece" type="text" class="validate" name="descripcion">
                    <label for="textpiece">Descripción </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6"><input placeholder="Número de piezas" id="textpiece" type="text" class="validate" name="numPZ">
                    <label for="textpiece">Total de piezas</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6"><input placeholder="Precio" id="textpiece" type="text" class="validate" name="costo">
                    <label for="textpiece">Costo por pieza</label>
                </div>
            </div>


            <button class="btn waves-effect waves-light" type="submit" name="action">Agregar
    <i class="material-icons right">send</i>
  </button>
        </form>
    </div>

@endsection