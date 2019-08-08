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
$Comentario= $_POST['comentarios'];
#Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$cadenaB ="<a href=comentar.php> <button type='button' > Reintentar </button></a>";
$sql = "INSERT INTO comentarios (id_u, comentario) VALUES ('".$User."', '".$Comentario."')";
if($consulta=$conexion->query($sql)){
    echo "<h2> Comentario con éxito </h2>";
  $cad2="<img src='../imgPag/bien.png' width='200' height='200'>";
  echo $cad2;
}else{
    echo "<h2> Error al enviar el comentario, intentarlo más tarde. </h2>";
}

?>

</head>
<body align="center">
  <br><br>
<a href=usuario_principal.php> <button type="button" > Regresar </button></a>

</body>
</html>
