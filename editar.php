<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nombre1 = $_GET['nombre1'];
$nombre2 = $_GET['nombre2'];
$apellido1 = $_GET['apellido1'];
$apellido2 = $_GET['apellido2'];
$correo = $_GET['correo'];

?>
    <div>
    <form action="speditar.php" method="post">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
                <td><input type="text" name="id" style="visibility: hidden;"  value="<?=$id?>" id=""></td>
            </tr>
            <tr>
                <td>nombre1:</td>
                <td><input type="text" name="nombre1" value="<?=$nombre1?>" id="" ></td>
            </tr>
            <tr>
                <td>nombre2:</td>
                <td><input type="text" name="nombre2" value="<?=$nombre2?>" id=""></td>
            </tr>
            <tr>
                <td>apellido1:</td>
                <td><input type="text" name="apellido1" value="<?=$apellido1?>" id=""></td>
            </tr>
            <tr>
                <td>apellido2:</td>
                <td><input type="text" name="apellido2" value="<?=$apellido2?>" id=""></td>
            </tr>
            <tr>
                <td>correo:</td>
                <td><input type="text" name="correo" value="<?=$correo?>" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar"></td>
            </tr>
        </table>

    </form>

    </div>
</body>
</html>