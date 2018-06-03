@extends("layout.master")
@section("contenido")
<h1>Editar Registro</h1>
<form action="{{route('productos.update',$producto->id)}}" method="post">
	{{csrf_field()}}
        {{method_field('PUT')}}
	<!--<input type="hidden" name="_method" value="PUT"></input>-->
	<label>Nombre</label><br/>
	<input type="text" name="nombre" value="{{$producto->nombre}}"><br/>
	<label>Descripcion</label><br/>
	<textarea name="descripcion" row="100" col="150">{{$producto->descripcion}}</textarea><br/>
	<input type="submit" name="enviar" value="Guardar"></input>

</form>
@stop
