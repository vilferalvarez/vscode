@extends("layout.master")
@section("contenido")
<h1>Listado de productos</h1>
<table border=1>
	@foreach($productos as $pro)
	<tr>
		<td>
			{{$pro->nombre}}
		</td>
		<td>
			{{$pro->descripcion}}
		</td>
		<td>
			<a href="{{route('productos.show',$pro->id)}}">Ver detalle</a>
		</td>
		<td>
			<a href="{{route('productos.edit',$pro->id)}}">Editar</a>
		</td>
		<td>
			<form action="{{route('productos.destroy',$pro->id)}}" method="post">
				{{csrf_field()}}
				<input type="submit" name="eliminar" value="Eliminar">
				<input type="hidden" name="_method" value="DELETE"></input>
			</form>
		</td>
	</tr>
	@endforeach
</table>
@stop