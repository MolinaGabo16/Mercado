
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
<h2>Eliminar Usuario</h2>
<?php
$User=$_SESSION['id_u'];
#Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$sql="SELECT * FROM usuario WHERE id_u<>'".$User."'";

    if($consulta=$conexion->query($sql)){
      #Mostramos los resultados obtenidos
       echo '<table>';
       echo '<tr>';
       echo '<td> Usuario </td><td> Nombre </td>';
       echo '</tr>';
        while($fila = $consulta->fetch_assoc())
        {
          $id=$fila['id_u'];
          $Boton2="<td><a href=borrarUserAdm.php?idP=$id> <button class='boton rojo' > Borrar </button></a></td>";
          echo '<tr>';
          echo '<td>' . $fila['id_u'] . '</td><td>' . $fila['nombre'] . '</td><td>'.$Boton2.'</td>';
          echo '</tr>';
        }
        echo '</table>';

}

?>
<br>
<a href=usuario_admin.php> <button type='button' > Regresar </button></a>
</body>
</html>
