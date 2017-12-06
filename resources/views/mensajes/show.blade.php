@extends('layout')
@section('contenido')
<div class="content">
	<div class="row">
		<div class="col-4">
			<h1>Mensaje</h1>
			<div class="card border-primary mb-3" style="max-width: 20rem;">
			  <div class="card-header"> {{$mensaje->email}}</div>
			  <div class="card-body text-primary">
			    <h4 class="card-title">{{$mensaje->asunto}}:</h4>
			    <p class="card-text">{{$mensaje->mensaje}}</p>
			  </div>
			</div>			
		</div>
		<div class="col-4">
			<h1>Responder</h1>
			<form method="POST" action={{route('send')}}>
				{!!csrf_field()!!}
				<div class="form-group">
				    <label for="exampleFormControlInput1">Email</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" name="to">
				</div>
				<div class="form-group">
				    <label for="exampleFormControlTextarea1">Mensaje</label>
				    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
		<div class="col-4">
	</div>
</div>

@stop