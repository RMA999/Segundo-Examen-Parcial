<!doctype html>
<html>
<head>
<title>Registro de conferencistas </title>
</head>
<body>
<form action="../Guardar/guardar1.php" method="POST">

<label for="nombre">Nombre</label>
<input type="text" name="nombre" required/>
<label for="apellido">apellido</label>
<input type="text" name="apellido" required/>
<label for="profesion">Profesion</label>
<input type="text" name="profesion" required/>
<label for="biografia">Biografia</label>
<input type="text" name="biografia" required/>
<label for="correo">Correo</label>
<input type="text" name="correo" required/>
<input name="enviar" type="submit" value="registrar"/>
</form>
</body>
</html>