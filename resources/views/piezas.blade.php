@extends('layouts.homeView')

@section('content')

<div class="row">
        <div class="col s6">
            <h3>Piezas</h3>
        </div>
        
    </div>

    <table class="striped, highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Número de piezas</th>
                <th>Costo por pieza</th>

            </tr>
        </thead>
        <tbody>
            @if(!is_null($piezas))
            @foreach($piezas as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nombre}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->numPZ}}</td>}
                <td>{{$p->costo}}</td>
                <td><a href="/editar/{{$p->id}}">
                        <i class="small material-icons blue-text text-darken-3">mode_edit</i></a>
                    <a href="/borrar/{{$p->id}}"><i class="small material-icons red-text text-darken-2">
                            delete</i></a>
                    
                        </td>
                
            </tr>
            @endforeach
            @endif
        </tbody>

    </table>
    <div class="col s6 right" style="padding: 30px 60px 30px 30px">
        <a class="btn-floating btn-large waves-effect waves-light red" href="/agrega">
        <i class="material-icons">add</i></a></div>
@endsection