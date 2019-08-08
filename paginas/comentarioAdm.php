
<?php
session_start();
?>
<html>
  <head>
<title>Preguntas</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<body align="center">
<h2>Comentarios Recibidos</h2>
<?php
$User=$_SESSION['id_u'];
##Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$sql="SELECT usuario.nombre, comentarios.comentario FROM comentarios JOIN usuario WHERE comentarios.id_u=usuario.id_u";

if($consulta=$conexion->query($sql)){
    echo '<table>';
    echo '<tr>';
    echo '<td><b> Usuario </b></td><td><b> Comentario </b></td>';
    echo '</tr>';
      while($fila = $consulta->fetch_assoc()){

        echo '<tr>';
        echo '<td>' . $fila['nombre'] . '</td><td>' . $fila['comentario'] . '</td>';
        echo '</tr>';
      }
      echo '</table>';
}
?>
<br><br><br><br>
<a href=usuario_admin.php> <button type='button' > Regresar </button></a>
</body>
</html>
