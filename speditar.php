<?php
$id = $_POST['id'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$correo = $_POST['correo'];

$cnx = mysqli_connect('localhost','root','','usuario');
$sql = "UPDATE tabla set nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', correo='$correo' WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: index.php");
?>