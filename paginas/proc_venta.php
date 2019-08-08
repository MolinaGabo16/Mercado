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
$Pregunta= $_POST['pregunta'];
$Precio=$_POST['precio'];
$Descrip=$_POST['descripcion'];


include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL

// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 400000))
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/Mercado/paginas/imgProd/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    }
    else
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
}
else
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
}

$Imagen=$nombre_img;
include_once '../conectBD/conexion.php';
$cadenaB ="<a href=nueva_venta.php> <button type='button' > Reintentar </button></a>";


$sql= "INSERT INTO pregunta (id_u, pregunta, precio, descripcion, imagen) VALUES ('".$User."', '".$Pregunta."','".$Precio."','".$Descrip."', '".$Imagen."')";
#Efectuamos la consulta SQL
  if($consulta=$conexion->query($sql)){
    echo "<h2> Producto registrado con éxito </h2>";
    $cad2="<img src='../imgPag/ventaaaEx.png' width='200' height='200'><br><br>";
    echo $cad2;
  }else{
    echo "<h2> El producto no se ha registrado </h2><br><br>";
    echo $cadenaB;
  }

?>

</head>
<body align="center">
  <br><br>
<a href=usuario_principal.php> <button type="button" > Regresar </button></a>
</body>
</html>
