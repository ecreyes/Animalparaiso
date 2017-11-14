@extends('layout')
@section('contenido')
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<h1>Contactanos</h1>
				<form action="contacto" method="POST">
					<div class="form-group">
						<label for="">Nombre</label>
						<input class="form-control" type="nombre" name="nombre" placeholder="Ingresa tu nombre">
					</div>
				    <div class="form-group">
				   		<label for="exampleInputEmail1">Correo</label>
				    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
				    </div>
				    <div class="form-group">
					    <label for="exampleFormControlTextarea1">Mensaje</label>
					    <textarea name ="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>				
			</div>
			<div class="col-4"></div>
		</div>
	</div>
</div>
@stop