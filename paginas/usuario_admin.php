<?php
session_start();
if($_SESSION['tipo']=="user1"){
  echo "<h2>No tienes privilegios para estar en esta página.</h2><br>";
  $cadenaB ="<a href=index.html> <button type='button' >Principal </button></a>";
  echo $cadenaB;
  exit;
}

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

} else {
   echo "<h2>Esta pagina es solo para usuarios registrados.</h2><br>";
   $cadenaB ="<a href=index.html> <button type='button' >Principal </button></a>";
   echo $cadenaB;

exit;
}

?>
<html>
  <head>
<title>Administrador Inicio</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" href="style/index_style.css">
</head>
<body align="center">
  <?php
  #Conectamos con MySQL
  include_once '../conectBD/conexion.php';

  $sql1="SELECT nombre FROM usuario WHERE id_u='".$_SESSION['id_u']."'";
  $consulta=$conexion->query($sql1);
  $fila = $consulta->fetch_assoc();

  #Efectuamos la consulta SQL
  echo "<h2> Bienvenido".$fila['nombre']."</h2>";
  ?>
  <header>
  		<div class="contenedor" id="uno">
  			<a href="nueva_ventaAdm.php"><img class="icon" src="pictures/Cart.png"></a>
  			<p class="texto">Nueva Venta</p>
  		</div>
  		<div class="contenedor" id="dos">
  			<a href="ventasAdm.php"> <img class="icon" src="pictures/Search.png"></a>
  			<p class="texto">Ver Productos</p>
  		</div>
  		<div class="contenedor" id="tres">
  			<a href="datosAdm.php"> <img class="icon" src="pictures/List.png"></a>
  			<p class="texto">Mis Ventas</p>
  		</div>
  		<div class="contenedor" id="cuatro">
  		<a href="comentarioAdm.php">	<img class="icon" src="pictures/Massage.png"></a>
  			<p class="texto">Ver Comentarios</p>
  		</div>
  		<div class="contenedor" id="cinco">
  			<a href="EliminarUser.php"><img class="icon" src="pictures/info.png"></a>
  			<p class="texto">Eliminar Usuario</p>
  		</div>
  		<div class="contenedor" id="seis">
  		<a href="cerrarSesion.php">	<img class="icon" src="pictures/Lock.png"></a>
  			<p class="texto">Cerrar Sesión</p>
  		</div>
  	</header>
<?php
include_once '../conectBD/conexion.php';
$sql2="SELECT pregunta FROM pregunta WHERE notificacion=1 AND id_u='".$_SESSION['id_u']."'";
$consulta1=$conexion->query($sql2);
if($consulta1->num_rows > 0){
  $cad2="<img src='../imgPag/notificacion.png' width='80' height='80'>";
  echo $cad2;
  echo"<h4> Alguien a comentado tus siguientes productos </h4>";
  while($fila = $consulta1->fetch_assoc()){
    echo "<h4>".$fila['pregunta']."</h4>";
  }
}else{
  $cad2="<img src='../imgPag/email.png' width='100' height='100'>";
  echo $cad2;
  echo"<h4> No tienes notificaciones en este momento </h4>";
}

 ?>
</body>
</html>
