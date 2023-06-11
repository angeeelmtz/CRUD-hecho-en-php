<?php
include 'conectar.php';
$ced = $_GET['cedula'];
$query = "DELETE FROM profesor where cedula like '$ced'";
$result = mysqli_query($conexion,$query);
if(!$result){
    echo "no se Elimino";
}
else{
    header('location:../main/Teacher.php');
}
?>