<!doctype html>
<html>
<head>
<title>Registro de conferencistas </title>
</head>
<body>
<form action="../Guardar/guardar2.php" method="POST">

<label for="nombre_conf">Nombre de conferencia</label>
<input type="text" name="nombre_conf" required/>
<label for="correo">Correo</label>
<input type="email" name="correo" required/>

<input name="enviar" type="submit" value="registrar"/>
</form>
</body>
</html>