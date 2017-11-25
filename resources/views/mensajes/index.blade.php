@extends('layout')

@section('contenido')
	<h1>Todos los mensajes</h1>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($mensajes as $mensaje)
  	<tr>
  		<th scope="row">{{$mensaje->id}}</th>
  		<td>{{$mensaje->nombre}}</td>
  		<td>{{$mensaje->email}}</td>
  		<td>{{$mensaje->mensaje}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('mensajes.show',$mensaje->id)}}" role="button">Mostrar</a>
        <a class="btn btn-success" href="{{route('mensajes.edit',$mensaje->id)}}" role="button">Editar</a>
        <form style="display:inline" method="POST" action="{{route('mensajes.destroy',$mensaje->id)}}">
          {!!csrf_field()!!}
          {!!method_field('DELETE')!!}
          <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
      </td>
  	</tr>
  	@endforeach
  </tbody>
</table>
@stop