@extends('layout')
@section('contenido')
<div class="content">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">
			<h1>Mensaje</h1>
			<div class="card border-primary mb-3" style="max-width: 20rem;">
			  <div class="card-header"> {{$mensaje->email}}</div>
			  <div class="card-body text-primary">
			    <h4 class="card-title">{{$mensaje->nombre}}:</h4>
			    <p class="card-text">{{$mensaje->mensaje}}</p>
			  </div>
			</div>			
		</div>
		<div class="col-4"></div>
	</div>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, labore animi! Molestiae atque repellendus, deserunt similique sed recusandae incidunt itaque ducimus maiores mollitia in molestias iure praesentium ex qui! Illo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, unde. Quia distinctio doloremque vitae, cumque, explicabo porro unde quidem ea. Obcaecati, amet. Deserunt tempore ipsum, rem facere recusandae voluptas laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quaerat cupiditate sapiente omnis ad dolore in eveniet et dicta nisi? Tenetur suscipit sit, minima veritatis iste debitis molestias, ratione reiciendis!
</div>

@stop