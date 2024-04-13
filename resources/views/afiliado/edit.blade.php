@extends('layouts.principal')

@section('hijos')

<h1>Editar Afiliado</h1>

<div class="container">
<div class="row">
<div class="col">

<form action="/afiliado/{{$editarAfiliado->id}}" method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
    <label for="">ID</label>
    <input type="text" name="id" id="id" value="{{$editarAfiliado->id}}">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editarAfiliado->nombre}}">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editarAfiliado->apellido}}">
    </div>

    <div class="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="{{$editarAfiliado->ciudad}}">
    </div>

    <div class="mb-3">
    <label for="">telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$editarAfiliado->telefono}}">
    </div>

    <div class="mb-3">
    <label for="">edad</label>
    <input type="text" name="edad" id="edad" value="{{$editarAfiliado->edad}}">
    </div>

    
    <button type="submit">Guardar</button>
</form>

</div>
</div>
</div>
@endsection