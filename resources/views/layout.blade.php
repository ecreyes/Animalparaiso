<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/jumbotron.css" />.
    <title>Animalparaiso</title>
</head>
<body>
	<header>
		<?php 
			function activeMenu($url){
				return request()->is($url) ? "nav-item active": "nav-item";
			}
		?>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		        <a class="navbar-brand" href="#">AnimalParaiso</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarCollapse">
		          <ul class="navbar-nav mr-auto">
		          	 <li class="{{activeMenu('/')}}">
			            <a class="nav-link" href={{route('home')}}>Inicio</a>
			          </li>
			          @if(auth()->guest())
			          <li class="{{activeMenu('mensajes/create')}}">
			            <a class="nav-link" href={{route('mensajes.create')}}>Contacto</a>
			          </li>		
			          @endif

			          @if(auth()->check())
			          <li class="{{activeMenu('mensajes')}}">
			            <a class="nav-link" href={{route('mensajes.index')}}>Mensajes</a>
			          </li>
			          <li class="{{activeMenu('voluntarios')}}">
			            <a class="nav-link" href={{route('voluntarios.index')}}>Voluntarios</a>
			          </li>
			          @endif		            
		          </ul>
		          <ul class="navbar-nav justify-content-end">
		          	@if(auth()->check())
			          <div class="btn-group">
						  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    {{auth()->user()->name}}
						  </button>
						  <div class="dropdown-menu dropdown-menu-right">
						  	<a class="dropdown-item" href="{{route('voluntarios.create')}}">Añadir Voluntario</a>
						    <a class="dropdown-item" href="/logout">Cerrar sesión</a>
						  </div>
					</div>	
			        @endif
			         @if(auth()->guest())
			          	<form class="form-inline" method="POST" action="/login">
			          		{!!csrf_field()!!}
							  <div class="form-group">
							    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email">
							  </div>
							  <div class="form-group mx-sm-3">
							    <input class="form-control sm" id="inputPassword2" type="password" name="password" placeholder="Password">
							  </div>
							  <button type="submit" class="btn btn-outline-primary btm-sm">Iniciar Sesión</button>
						</form>
			        @endif	
		          </ul>
		        </div>
	     	 </nav>		
	</header>
	@yield('contenido')

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>