<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Animalparaiso</title>
</head>
<body>
	<header>
		<?php 
			function activeMenu($url){
				return request()->is($url) ? "nav-item active": "nav-item";
			}
		?>
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		      <a class="navbar-brand" href="#">Animalparaiso</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>

		      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		        <ul class="navbar-nav mr-auto">
		          <li class="{{activeMenu('/')}}">
		            <a class="nav-link" href={{route('home')}}>Inicio</a>
		          </li>
		          <li class="{{activeMenu('mensajes')}}">
		            <a class="nav-link" href={{route('mensajes.index')}}>Mensajes</a>
		          </li>
		          <li class="{{activeMenu('mensajes/create')}}">
		            <a class="nav-link" href={{route('mensajes.create')}}>Contacto</a>
		          </li>
		        </ul>
		      </div>
		    </nav>			
		</div>	
	</header>
	<div class="container">
		<h1>No se ve por culpa de la barra</h1>
	</div>


	@yield('contenido')

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>