<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<br>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Añadir Nuevo</a>
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <tr>
                <td>id</td>
                <td>nombre1</td>
                <td>nombre2</td>
                <td>apellido1</td>
                <td>apellido2</td>
                <td>correo</td>
               

            </tr>
            <?php
                $cnx = mysqli_connect('localhost','root','','usuario');
                $sql = "SELECT * from tabla";
                        

                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                        <td><?php echo $mostrar[5] ?></td>
                        
                        
                        <td>
                            <?php 

                            ?>
                        </td>
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar[0] ?> &
                            nombre1=<?php echo $mostrar[1] ?> &
                            nombre2=<?php echo $mostrar[2] ?> &
                            apellido1=<?php echo $mostrar[3] ?> &
                            apellido2=<?php echo $mostrar[4] ?> &
                            correo=<?php echo $mostrar[5] ?> &
                            ">Editar</a>
                            <a href="speliminar.php? id=<?php echo $mostrar[0] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
    </center>
</body>
</html>