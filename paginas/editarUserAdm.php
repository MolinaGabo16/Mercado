<?php
session_start();
?>
<html>
  <head>
<title>Modificar Producto</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link href="../css/estilo.css" rel="stylesheet" type="text/css">

  </head>
<body align="center">
<h2>Modificar Producto</h2>
<br> Ahora puedes cambiar los datos de venta de tu producto.<br>
Para realizar el proceso de forma correcta, debes subir la imagen nuevamente.

<?php
$User=$_SESSION['id_u'];
$ID_preg=$_GET['idP'];
$_SESSION['id_p']=$ID_preg;
##Conectamos con MySQL
include_once '../conectBD/conexion.php';

#Efectuamos la consulta SQL
//Consulta para mostrar el product selecionado
$result="SELECT * FROM pregunta WHERE id_p='".$ID_preg."'";

echo "<form action='editarUserAdmproc.php?idP=$ID_preg' enctype='multipart/form-data' method='post' name='sesion' id='sesion' onsubmit='return comprobar()'>";
#Mostramos los resultados obtenidos para el producto
if($consulta=$conexion->query($result)){
    while($fila = $consulta->fetch_assoc()){

      $nomP=$fila['pregunta'];
      $precP=$fila['precio'];
      $descP=$fila['descripcion'];

      echo" <br>Nombre de tu producto <br><input class='textbox' value='$nomP' name='pregunta' type='text' size='25' height='1px'/>";
      echo" <br><br>Precio <br><input class='textbox' value='$precP' name='precio' type='number' size='25' height='15px'/>";
      echo" <br><br>Descripción <br><input class='textbox' value='$descP'name='descripcion' type='text' size='25' height='15px'/>";
    }
}



?>
<br><br>Imagen<br><br>
 <input id="imagen" name="imagen" size="30" type="file" />
<br><br>
<label><input type="submit" id="bEnviar" name="Submit" value="Guardar Cambios" />
</form>

<br><br><br>
<a href=usuario_admin.php> <button type='button' > Regresar </button></a>


</body>
</html>
