<!doctype html>
<html>
<head>
<title>Registro de conferencistas </title>
</head>
<body>
<form action="../Guardar/guardar3.php" method="POST">

<label for="nombre">Nombre de conferencia</label>
<input type="text" name="nombre" required/>
<label for="apellido">Apellidos</label>
<input type="text" name="apellido" required/>
<label for="correo">Correo</label>
<input type="email" name="correo" required/>

<input name="enviar" type="submit" value="registrar"/>
</form>
</body>
</html>