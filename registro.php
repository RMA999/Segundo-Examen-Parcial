<!doctype html>
<html>
<head>
<title>Formulario de registro </title>
</head>
<body>
<form action="guardar.php" method="POST">

<label for="correo">Correo</label>
<input type="email" name="correo" required/>
<label for="clave">Clave</label>
<input type="password" name="clave" required/>
<input name="enviar" type="submit" value="registrar"/>
<div>
<li><a href="sesion.php">Ya estas registrado?</a></li>

</div>
</form>
</body>
</html>
