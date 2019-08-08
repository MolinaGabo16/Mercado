<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Mercado Libre</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body align="center">
<h2>Bienvenido a Mercado Libre</h2>
<img src="imgPag/homee.png" width="400" height="300">
<br><br>
<a href=paginas/login.php> <button type="button" >Iniciar Sesi&oacuten </button></a>
<a href=paginas/registro.php> <button type="button" >Registrarse </button></a>
<br><br>
Somos una plataforma novedosa en la cual podrás vender y comprar productos de una forma fácil y rápida,<br>
podrás interactuar de forma directa con los vendedores o posibles compradores para llegar a un acuerdo.<br><br>
<?php
#agregamos la conexión a la base de datos
include_once 'conectBD/conexion.php';
$sql="SELECT COUNT(*) FROM usuario";
if($consulta=$conexion->query($sql)){
  $fila = $consulta->fetch_assoc();
  echo "<b>Usuarios Registrados: ".$fila['COUNT(*)']."</b>";
}
$img1="<img src='imgPag/opera.png'  width='25' height='25'>";
$img2="<img src='imgPag/chrome.png'  width='25' height='25'>";
echo "<br><br>Para la correcta interacción y visualización de la página es recomendable usar los navegadores Google Chrome ".$img2." y Opera ".$img1;


 ?>
</body>
</html>
