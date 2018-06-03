@extends("layout.master")
@section("contenido")
<h1>{{$producto->nombre}}</h1>
<p>{{$producto->descripcion}}</p>
<a href="{{route('productos.index')}}">Listado de productos</a>
@stop
