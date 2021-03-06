@extends('layout')
@section('contenido')
{{-- preguntando si la sesion tiene el 'info' --}}
@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<h1>Contactanos</h1>
				<form action="{{route('mensajes.store')}}" method="POST">
					{!!csrf_field()!!}
					<div class="form-group">
				   		<label for="exampleInputEmail1">Correo</label>
				    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
						{{$errors->first('email')}}
				    </div>
					<div class="form-group">
						<label for="">Asunto</label>
						<input class="form-control" type="asunto" name="asunto" value="{{old('asunto')}}" placeholder="Ingresa tu asunto">
						{{$errors->first('asunto')}}
					</div>
				    <div class="form-group">
					    <label for="exampleFormControlTextarea1">Mensaje</label>
					    <textarea name ="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('mensaje')}}</textarea>
						{{$errors->first('mensaje')}}
					</div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>				
			</div>
			<div class="col-4"></div>
		</div>
	</div>
</div>
@endif

@stop