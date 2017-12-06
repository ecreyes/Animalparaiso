@extends('layout')
@section('contenido')
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<h1>Editar Voluntario</h1>
				<form action="{{route('voluntarios.update',$voluntario->id)}}" method="POST">
					{!!method_field('PUT')!!}
					{!!csrf_field()!!}
				    <div class="form-group">
				   		<label for="exampleInputEmail1">Correo</label>
				    	<input type="email" name="email" value="{{$voluntario->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
						{{$errors->first('email')}}
				    </div>
				    <div class="form-group">
					    <label for="exampleFormControlTextarea1">Ayuda</label>
					    <textarea name ="ayuda" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$voluntario->ayuda}}</textarea>
						{{$errors->first('ayuda')}}
					</div>
				  <button type="submit" class="btn btn-danger">Actualizar</button>
				</form>				
			</div>
			<div class="col-4"></div>
		</div>
	</div>
</div>
@stop