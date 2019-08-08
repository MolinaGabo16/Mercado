<?php
session_start();
?>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Iniciar Sesi&oacuten</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<?php
$_SESSION['id_u'] = $_POST['id_u'];
$Correo= $_POST['id_u'];
$Contra= $_POST['contrasenia'];

$cadena1 ="<a href=usuario_admin.php> <button type='button' >Comenzar </button></a>";
$cadena3 ="<a href=usuario_principal.php> <button type='button' >Comenzar </button></a>";
$cadena2="<a href=login.php> <button type='button' >Regresar </button></a>";
$cad2="<img src='../imgPag/registroEx.png' width='200' height='200'><br><br>";


$sql="SELECT * FROM usuario WHERE id_u='$Correo'AND contra='$Contra'";
include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$consulta=$conexion->query($sql);

if($consulta->num_rows > 0){
  while($fila = $consulta->fetch_assoc()){

            if($fila['type']=='admin'){
            echo '<h2> Inicio Correcto<h2><br>';
            echo $cad2;
            echo $cadena1;
            $_SESSION['login']=true;
            $_SESSION['id_u']=$Correo;
            $_SESSION['tipo']=$fila['type'];
            }
            if($fila['type']=='user1'){
            echo '<h2> Inicio Correcto<h2><br><br>';
            echo $cad2;
            echo $cadena3;
            $_SESSION['login']=true;
            $_SESSION['id_u']=$Correo;
            $_SESSION['tipo']=$fila['type'];
            }
        }
}else{
  echo '<h2> Los datos ingresados son incorrectos<h2><br><br>';
  echo $cadena2;
}

?>

</head>
<body align="center">

</body>
</html>
