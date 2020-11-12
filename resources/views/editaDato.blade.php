
@extends('layouts.homeView')

@section('content')

<form action="guardaEdicion" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$piezas->id}}">
        <input type="text" name="nombre" value="{{$piezas->nombre}}">
        <input type="text" name="descripcion" value="{{$piezas->descripcion}}">
        <input type="text" name="numPZ" value="{{$piezas->numPZ}}">
        <input type="text" name="costo" value="{{$piezas->costo}}">
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
</form>

@endsection