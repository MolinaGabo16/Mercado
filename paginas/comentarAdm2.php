<?php
session_start();
?>
<html>
  <head>
<title>Comentarios Venta</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link href="../css/estilo.css" rel="stylesheet" type="text/css">

  </head>
<body align="center">
<h2>Comentarios Producto</h2>
<?php
$User=$_SESSION['id_u'];
$ID_preg=$_GET['idP'];
$_SESSION['id_p']=$ID_preg;
#Conectamos con MySQL
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL

//Consulta para mostrar la pregunta selecionada
$sql1="SELECT * FROM pregunta WHERE id_p='".$ID_preg."'";
//Consulta para mostrar todos los comentarios relacionados a la pregunta
$sql2="SELECT usuario.nombre, respuesta.respuesta,respuesta.id_u FROM respuesta JOIN usuario WHERE respuesta.id_u=usuario.id_u AND id_p='".$ID_preg."'";
//Actualizando estatus de notificacion = nueva notificacion
$sql3 = "UPDATE pregunta SET notificacion=1 WHERE id_p=$ID_preg";
$consulta2=$conexion->query($sql3);

echo "<div style='position:absolute; top:50px; left:40px;'>";
#Mostramos los resultados obtenidos para la pregunta
if($consulta=$conexion->query($sql1)){
    while($fila = $consulta->fetch_assoc()){
      echo '<h2>'. $fila['pregunta'].'</h2><br>';
      $imgname=$fila['imagen'];
      #echo $imgname;
      $cad2="<img src='imgProd/$imgname' width='300' height='300'>";

      echo $cad2.'<br>';
      echo'Precio<br>';
      echo '<h2>$'.$fila['precio'].'.00 MXN.</h2>';

      echo'<br>Descripción del producto<br><br>';
      echo $fila['descripcion'];
    }
}
echo"</div>";

echo "<div style='position:absolute; width:950px; height: 350px; top:50px; left:400px; overflow-y: auto; '>";
  //Mostramos los comentarios encontrados
  if($consulta=$conexion->query($sql2)){
      if($consulta->num_rows > 0){
        echo '<br><h4>Los comentarios son los siguientes</h4><br>';
        echo'<table>';
              while($fila = $consulta->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$fila['nombre'].'</td><td>'.$fila['respuesta'].'</td>';
                echo '</tr>';
              }
        echo '</table><br>';
      }else{
          echo '<h4>No hay comentarios, se el primero en comentar el producto</h4>';
      }

  }
echo"</div>";


?>
<div style="position:absolute; top:420px; left:650px; ">

<form action="proc_comentAdm.php" method="post" name="sesion" id="sesion" onsubmit="return comprobar()">
<br><b>Ingresa tu comentario</b><br><br>
<input class="textbox" name="comentario" type="text" size="25" height="15px"/>
&nbsp;&nbsp;
<label><input type="submit" id="bEnviar" name="Submit" value="Comentar" />
</form>
<br><br><br>
<a href=usuario_admin.php> <button type='button' > Regresar </button></a>


</body>
</html>
