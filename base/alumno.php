<?php
include 'conectar.php';

$query = 'SELECT * FROM profesor';
$ejecutar = mysqli_query($conexion,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    
    <div class="form-container">
        <h2 class="title">Insertar Datos</h2>
        <form class="form-insert" action="insertar.php" method="POST">
            <input type="text" name="materia" placeholder="Materia">
            <input type="text" name="cedula" placeholder="Cedula">
            <input type="number" name="nota" placeholder="Nota">
            <input type="submit" value="Aceptar">
        </form>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Cedula</th>
                    <th>Nota</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($ejecutar as $row){ ?>

            <tr>
                <td><?php echo $row['materia']?></td>
                <td><?php echo $row['cedula']?></td>
                <td><?php echo $row['nota']?></td>
                <td><a class="edit" href="actualizar.php?id=<?php echo $row['cedula'] ?>">Editar</a></td>
                <td><a href="eliminar.php?id=<?php echo $row['cedula']?>" class="delete" >Eliminar</a></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

</body>
</html>