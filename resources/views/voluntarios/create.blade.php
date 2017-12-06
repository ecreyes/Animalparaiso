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
				<h1>Añadir voluntario</h1>
				<form action="{{route('voluntarios.store')}}" method="POST">
					{!!csrf_field()!!}
					<div class="form-group">
				   		<label for="exampleInputEmail1">Correo</label>
				    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar email">
						{{$errors->first('email')}}
				    </div>
				    <div class="form-group">
					    <label for="exampleFormControlTextarea1">Ayuda</label>
					    <textarea name ="ayuda" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('ayuda')}}</textarea>
						{{$errors->first('ayuda')}}
					</div>
				  <button type="submit" class="btn btn-primary">Añadir</button>
				</form>				
			</div>
			<div class="col-4"></div>
		</div>
	</div>
</div>
@endif

@stop