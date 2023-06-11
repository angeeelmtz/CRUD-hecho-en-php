<?php
include 'conectar.php';
$result = mysqli_query($conexion,'SELECT * FROM profesor');
?>

<!DOCTYPE html>
<html lang="en">
<header>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>    
    <div class="form-container">
    <font class="title" size ="12" color="#fff">Insertar Datos</font>

        <form class="form-insert" action="
        ../base/insertar.php" method="post">

            <input type="text" name="cedula" placeholder="Cedula">

            <input type="text" name="materia" placeholder="Materia">

            <input type="number" name="nota" placeholder="nota">

            <input type="submit" value="Aceptar">
            <a href="inicio.php"><img src="../CSS/volver.png" width="70" height="25"></a>
        </form>
    </div>

    <div class="table-container">
    <font class="table-container" size ="12" color="#fff"></font>
        <table>
            <thead>
                <tr>
                    <th>CEDULA</th>
                    <th>MATERIA</th>
                    <th>NOTA</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($result as $row){ ?>

            <tr>
                <td><?php echo $row['cedula']?></td>
                <td><?php echo $row['materia']?></td>
                <td><?php echo $row['nota']?></td>

                <td><a class="edit" href="../base/actualizar.php?
                    cedula=<?php echo $row['cedula']?> & 
                    materia=<?php echo $row['cedula']?> &  
                    nota=<?php echo $row['cedula']?>
                    ">Editar</a></td>
                <td><a href="../base/eliminar.php?cedula=<?php echo $row['cedula']?>" class="delete" >Eliminar</a></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</body>
            </header>
</html>