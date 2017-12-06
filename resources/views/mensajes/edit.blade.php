@extends('layout')
@section('contenido')
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<h1>Editar Mensaje</h1>
				<form action="{{route('mensajes.update',$mensaje->id)}}" method="POST">
					{!!method_field('PUT')!!}
					{!!csrf_field()!!}
				    <div class="form-group">
				   		<label for="exampleInputEmail1">Correo</label>
				    	<input type="email" name="email" value="{{$mensaje->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
						{{$errors->first('email')}}
				    </div>
				    <div class="form-group">
						<label for="">Asunto</label>
						<input class="form-control" type="asunto" name="asunto" value="{{$mensaje->asunto}}" placeholder="Ingresa tu asunto">
						{{$errors->first('asunto')}}
					</div>
				    <div class="form-group">
					    <label for="exampleFormControlTextarea1">Mensaje</label>
					    <textarea name ="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mensaje->mensaje}}</textarea>
						{{$errors->first('mensaje')}}
					</div>
				  <button type="submit" class="btn btn-danger">Actualizar</button>
				</form>				
			</div>
			<div class="col-4"></div>
		</div>
	</div>
</div>
@stop