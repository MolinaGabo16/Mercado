<?php
session_start();
?>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Publicar Pregunta</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<?php
$User=$_SESSION['id_u'];
$Comentario= $_POST['comentario'];
$ID_preg=$_SESSION['id_p'];
#Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$cadenaB ="<a href=comentar.php> <button type='button' > Reintentar </button></a>";
$sql = "INSERT INTO respuesta (id_p, id_u, respuesta) VALUES ('".$ID_preg."', '".$User."', '".$Comentario."')";
$sql2 = "UPDATE pregunta SET notificacion=1 WHERE id_p=$ID_preg";
$consulta2=$conexion->query($sql2);
  if($consulta=$conexion->query($sql)){

        echo "<h2> Comentario Agregado con éxito </h2>";
        $cad2="<img src='../imgPag/exito.png'  width='200' height='200'>";
        echo $cad2;

  }else{
      echo "<h2> Error al agregar la pregunta. </h2>";
  }


?>

</head>
<body align="center">
  <br><br>
<a href=usuario_admin.php> <button type="button" > Regresar </button></a>

</body>
</html>
