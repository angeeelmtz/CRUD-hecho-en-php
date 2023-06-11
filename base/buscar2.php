<?php
$buscar = $_POST['buscar'];
include 'conectar.php';
$sql="SELECT cedula, materia, nota FROM profesor WHERE cedula='$buscar' order by cedula desc";
$result=mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilos3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,700&display=swap" rel="stylesheet">

</head>
<body>    
    
  <div class="table-container">
    <center><font size ="15" color="#fff">consultor de notas</font></center>
    <section class="textos-header">
        <br><table>
       
                <tr>
                    <th>CEDULA<font color="#fff"></font></th>
                    <th>MATERIA<font color="#fff"></font></th>
                    <th>NOTA<font color="#fff"></font></th>
                </tr>
           <tbody>
            <?php foreach($result as $row){ ?>

            <tr>
                <td><?php echo $row['cedula']?></td>
                <td><?php echo $row['materia']?></td>
                <td><?php echo $row['nota']?></td>
            </tr>
            <?php }?>
            </tbody>
        </table><br>
        <a href="../main/inicio.php"><img src="../CSS/volver.png" width="80" height="30"></a>
        </section>
    </div>
</body>
</html>