<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> buscador</title>
<link rel="stylesheet" type="text/css" href="../CSS/estilos2.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
</head>
<body>

<header>
<section class="textos-header">
     
<font size ="15" color="#fff">consultor de notas de alumnos</font>

<form action ="../base/buscar2.php" method="post">
<font size ="15" color="#fff">Ingrese cedula del alumno:</font><br><br>

<input type="text" name = "buscar" ced=""> <br><br>
<input type="submit" value = "buscar" >

</form>
 </section>

  <div class= "wave" style="height: 150px; overflow: hidden;" >
  <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M0.00,49.81 C149.99,149.50 349.21,-49.81 500.01,49.81 L500.01,149.50 L0.00,149.50 Z" style="stroke: none; fill: #ffff;">     
      </path>
     </svg>
    </div>
   </header>
</body>
</html>