.......<?php
session_start();
?>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Eliminar Usuario</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<?php
$User=$_SESSION['id_u'];
$Reporte="";
$ID_preg=$_GET['idP'];
//echo $ID_preg;
#Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$cadenaB ="<a href=usuario_admin.php> <button type='button' > Reintentar </button></a>";
$sql = "DELETE  from usuario WHERE id_u='".$ID_preg."'";
  if($consulta=$conexion->query($sql)){
      echo "<h2> Usuario eliminado con éxito </h2>";
  }

$sql2 = "DELETE  from pregunta WHERE id_u='".$ID_preg."'";

if($consulta=$conexion->query($sql2)){
    echo "<h2> Ventas eliminadas con éxito </h2>";
}

$sql3 = "DELETE  from respuesta WHERE id_u='".$ID_preg."'";
if($consulta=$conexion->query($sql3)){
    echo "<h2> Comentarios eliminados con éxito </h2>";
}

$cad2="<img src='../imgPag/user_delete.png' width='200' height='200'>";
echo $cad2;
?>

</head>
<body align="center">
  <br><br>
<a href=usuario_admin.php> <button type="button" > Regresar </button></a>

</body>
</html>
