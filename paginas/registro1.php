<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<title>Nuevo Usuario</title>
</head>
<body align="center">
  <?php
  #Obtenemos los campos recibidos
  $ID= $_POST['id_usuario'];
  $Nombre= $_POST['nombre1'];
  $Contra= $_POST['contrasenia'];
  $tipo="user1";

  //Conexión Mysqli
  include_once '../conectBD/conexion.php';
  $sql = "INSERT INTO usuario (id_u, nombre, contra, type) VALUES ('".$ID."','".$Nombre."', '".$Contra."', '".$tipo."')";
  //Consulta Mysqli
  if($consulta=$conexion->query($sql)){
    $cad ="<h2> Registro Exitoso </h2>";
    $cad2="<br><br><img src='../imgPag/registroEx.png' width='200' height='200'><br><br>";
    echo $cad;
    echo $cad2;
    $cadenaB ="<a href=../index.php> <button type='button' >Principal </button></a>";
    echo $cadenaB;

  }else{
    $cadenaB ="<a href=../index.php> <button type='button' >Principal </button></a>";
    echo'<h2> El correo ya se encuentra en uso, favor de intentarlo de nuevo</h2>'.$cadenaB;
  }

  ?>
  <br><br>

</body>
</html>
