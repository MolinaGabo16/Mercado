<?php
session_start();
?>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Publicar Pregunta</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

</head>
<body align="center">
  <?php
  $User=$_SESSION['id_u'];
  $Reporte="";
  $ID_preg=$_GET['idP'];
  //echo $ID_preg;
  #Conectamos con MySQL
  include_once '../conectBD/conexion.php';
  #Efectuamos la consulta SQL
  $cadenaB ="<a href=datos.php> <button type='button' > Reintentar </button></a>";
  $sql = "DELETE  from pregunta WHERE id_p='".$ID_preg."'";
  if($consulta=$conexion->query($sql)){
    echo "<h2> El producto ha sido marcado como...</h2>";
    $cad2="<img src='../imgPag/vendido.png' width='400' height='200'>";
    echo $cad2;
  }else{
    echo "<h2> Ha ocurrido un error, intentelo más tarde.</h2>";
    $cad2="<img src='img/registro01.png' width='200' height='200'>";
    echo $cad2;
  }
  ?>
  <br><br>
<a href=usuario_principal.php> <button type="button" > Regresar </button></a>

</body>
</html>
