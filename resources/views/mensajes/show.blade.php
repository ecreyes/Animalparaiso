@extends('layout')
@section('contenido')
<div class="content">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">
			<h1>Mensaje</h1>
			<div class="card border-primary mb-3" style="max-width: 20rem;">
			  <div class="card-header">Mensaje</div>
			  <div class="card-body text-primary">
			    <h4 class="card-title">{{$mensaje->nombre}} - {{$mensaje->email}}</h4>
			    <p class="card-text">{{$mensaje->mensaje}}</p>
			  </div>
			</div>			
		</div>
		<div class="col-4"></div>
	</div>
</div>

@stop