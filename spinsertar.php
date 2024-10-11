<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$correo = $_POST['correo'];


$cnx = mysqli_connect('localhost','root','','usuario');
$sql = "INSERT INTO tabla(nombre1, nombre2, apellido1, apellido2, correo ) VALUES('$nombre1', '$nombre2', '$apellido1', '$apellido2', '$correo')";
$rta = mysqli_query($cnx, $sql);
header("Location: index.php");
?>