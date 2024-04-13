@extends('layouts.principal')

@section('hijos')
<h1>Eliminar Registro</h1>

<div class="container">
<div class="row">
<div class="col">

<form action="/empleado/{{$eliminarEmpleado->id}}" method="POST">
@csrf
@method('PUT')
@csrf
    @method ('PUT')
    <div class="mb-3">
    <label for="">ID</label>
    <input type="text" name="id" id="id" value="{{$eliminarEmpleado->id}}">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$eliminarEmpleado->nombre}}">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$eliminarEmpleado->apellido}}">
    </div>

    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" id="nivel" value="{{$eliminarEmpleado->nivel}}">
    </div>

    <div class="mb-3">
    <label for="">telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$eliminarEmpleado->telefono}}">
    </div>

<button type="submit">ELIMINAR</button>

</div>
</div>
</div>
@endsection