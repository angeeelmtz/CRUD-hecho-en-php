<?php
include 'conectar.php';

$materia = $_POST['materia'];
$cedula = $_POST['cedula'];
$nota = $_POST['nota'];

$query = "INSERT INTO profesor (materia, cedula, nota) VALUES('$materia', '$cedula', '$nota')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    Header("Location: ../main/Teacher.php");
    
}else {
}
?>