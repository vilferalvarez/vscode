
<h1>Nuevo producto</h1>

<form action="{{route('productos.store')}}" method="post">

	{{csrf_field()}}
	<label>Nombre</label><br/>
	<input type="text" name="nombre"><br/>
	<label>Descripcion</label><br/>
	<textarea name="descripcion" row="100" col="150"></textarea><br/>
	<input type="submit" name="enviar" value="Guardar"></input>


</form>
@stop