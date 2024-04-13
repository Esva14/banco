@extends('layouts.principal')

@section('hijos')


<h1>Modulo de Retiros de afiliados: {{$afiliado}} </h1>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>codempleado</th>
            <th>codafiliado</th>
            <th>fecha</th>
            <th>monto</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>
        @foreach($retiros as $retiro)
        @if($retiro->coddafiliado==$afiliado)
            <tr></tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->coddafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th>            
                
            </th>
            </tr>
            @endif
        @endforeach
    </tbody>
</table>
@endsection