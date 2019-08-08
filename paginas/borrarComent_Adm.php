<?php
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
$ID_res=$_GET['idR'];
//echo $ID_preg;
#Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$sql = "DELETE  from respuesta WHERE id_res='".$ID_res."'";

if($consulta=$conexion->query($sql)){
  echo "<h2> Comentario borrado con éxito </h2>";
  $cad2="<img src='../imgPag/exito.png' width='200' height='200'>";
  echo $cad2;
}else{
  echo "<h2> Error al eliminar el comentario. </h2>";
}

?>

</head>
<body align="center">
  <br><br>
<a href=usuario_admin.php> <button type="button" > Regresar </button></a>

</body>
</html>
