
<?php

include("conectar.php");

$cedula=$_POST['cedula'];
$materia=$_POST['materia'];
$nota=$_POST['nota'];

$sql="UPDATE profesor set  materia='$materia',nota='$nota' where cedula like'$cedula'";
$rta=mysqli_query($conexion,$sql);

     if(!$rta){
       echo"no se actualizo!";
    }
    else{
        header("Location: ../main/Teacher.php");
    }
?>