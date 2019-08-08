<?php
session_start();
?>
<html>
  <head>
<title>Productos en venta</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<body align="center">
<?php
$User=$_SESSION['id_u'];
#Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$sql="SELECT usuario.nombre,pregunta.id_p, pregunta.pregunta,pregunta.precio, pregunta.imagen FROM pregunta JOIN usuario WHERE pregunta.id_u=usuario.id_u";

if($consulta=$conexion->query($sql)){
        if($consulta->num_rows > 0){
             echo "<h2>Productos en venta</h2>";
              #Mostramos los resultados obtenidos
               echo '<table>';
               echo '<tr>';
               echo '<td> <b>Vendedor </b></td><td> <b>Producto </b></td><td> <b> Imagen </b></td><td><b> Precio </b></td>';
               echo '</tr>';
                while($fila = $consulta->fetch_assoc()){
                  $id=$fila['id_p'];
                  $id_img=$fila['imagen'];
                  $imagen= "<img src='imgProd/".$id_img."' border='0' width='100' height='100'>";
                  $Boton2="<td><a href=comentarAdm2.php?idP=$id> <button type='button' > Comentar </button></a></td>";
                  echo '<tr>';
                  echo '<td>' . $fila['nombre'] . '</td><td>' . $fila['pregunta'] . '</td><td>'.$imagen.'</td><td>$ '.$fila['precio'] . '.00 MXN </td><td>'.$Boton2.'</td>';
                  echo '</tr>';
                }
                echo '</table>';
        }else{
          echo'<h2>Actualmente no hay productos en venta</h2>';
          $imagen="<img src='../imgPag/noventas.png'  width='200' height='200'>";
          echo $imagen;
        }
}


?>
<br><br><br><br>
<a href=usuario_admin.php> <button type='button' > Regresar </button></a>
</body>
</html>
