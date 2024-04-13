@extends('layouts.principal')

@section('hijos')

<h1>Editar Empleado</h1>

<div class="container">
<div class="row">
<div class="col">

<form action="/empleado/{{$editarEmpleado->id}}" method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
    <label for="">ID</label>
    <input type="text" name="id" id="id" value="{{$editarEmpleado->id}}">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editarEmpleado->nombre}}">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editarEmpleado->apellido}}">
    </div>

    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" id="nivel" value="{{$editarEmpleado->nivel}}">
    </div>

    <div class="mb-3">
    <label for="">telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$editarEmpleado->telefono}}">
    </div>

    
    <button type="submit">Guardar</button>
</form>

</div>
</div>
</div>
@endsection