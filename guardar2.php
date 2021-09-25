<?php
$nombre_conf = $_POST["nombre_conf"];
$correo = $_POST["correo"];
//$fecha = $_POST["fecha"];

$servername = "localhost";
$username = "rmorales";
$password = "rmorales";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}

$sql = "insert into rmorales.conferencia(nombre_conf,correo) values('".$nombre_conf."','".$correo."');";
if ($conn->query($sql) === TRUE) {
}
$conn->close();


?>