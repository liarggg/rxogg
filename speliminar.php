<?php
$id = $_GET['id'];

$cnx = mysqli_connect('localhost','root','','usuario');
$sql = "DELETE FROM tabla WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: index.php");
?>