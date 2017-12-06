<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Enviar un email</h1>
	<form method="POST" action="send">
		{!!csrf_field()!!}
		<div class="form-group">
		    <label for="exampleFormControlInput1">Email</label>
		    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Para" name="to">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlTextarea1">Mensaje</label>
		    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>