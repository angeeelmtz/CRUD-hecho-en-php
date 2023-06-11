<?php 
include("conectar.php");

$cedula=$_GET['cedula'];

$sql="SELECT * FROM profesor WHERE cedula='$cedula'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link rel="stylesheet" href="../CSS/estilos4.css">
        
    </head>
    <body>
        
        <div>
        <form class="form-insert" action="update.php" method="POST">   
            <font size ="15" color="#fff">Actualizar Datos</font> 

            <input type="hidden" name="cedula" value="<?php echo $row['cedula']  ?>"><br>

            <input type="text" name="materia" placeholder="Materia" value="<?php echo $row['materia']?>"><br>

            <input type="text" name="nota" placeholder="Nota" value="<?php echo $row['nota']?>"> <br>           
            <tr>
            <input type="submit" value="Actualizar"><br>
            <input type="submit" value="volver">
            </tr>
           </form>            
         </div>       
    </body>
</html>