<?php
if(isset($_POST["correo"]) && isset($_POST["clave"])){
	$correo = $_POST["correo"];
	$clave = $_POST["clave"];
	$servername = "localhost";
	$username = "rmorales";
	$password = "rmorales";
	
	$conn = mysqli_connect($servername, $username, $password);

	if (!$conn) {
    		die("Fallo conectarse por: " . mysqli_connect_error());
	}

	$sql = "SELECT correo,clave FROM rmorales.registro where correo = '".$correo."' and clave = '".md5($clave)."';";


	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		session_start();
		$_SESSION["correo"]=$correo;
		if ($result) {
		}
	}else{
		echo "No se logro iniciar sesion";
	}
	$conn->close();
} 
?>
<!doctype html>
<html>
<head>
<title>Formulario de registro </title>
</head>
<body>
<?php
if(isset($_SESSION["correo"])){
?>
<h1>Sesion iniciada</h1>
<div class="container">
        <img class="imagen" src="APROUS.jpg" height="200" width="200" />

        <ul class="menu">
            <li><a href="Formularios/conferencistas.php">Registro de conferencistas</a></li>
            <li><a href="Formularios/conferencia.php">Registro de conferencias</a></li>
            <li><a href="Formularios/asistentes.php">Asistentes</a></li>
        </ul>
    </div>
<form action="cerrar.php" method="POST">
<input name="enviar" type="submit" value="Cerrar"/>
</form>

<?php
}
else{
?>
<form action="sesion.php" method="POST">
<label for="correo">Correo</label>
<input type="text" name="correo" required/>
<label for="clave">Clave</label>
<input type="password" name="clave" required/>
<input name="enviar" type="submit" value="acceder"/>
</form>
<?php
}
?>
</body>
</html>

