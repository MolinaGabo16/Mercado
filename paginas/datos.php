<?php
session_start();
?>
<html>
  <head>
<title>Mis Ventas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link href="../css/estilo.css" rel="stylesheet" type="text/css">

  </head>
<body align="center">

<?php
$User=$_SESSION['id_u'];

include_once '../conectBD/conexion.php';
#Efectuamos la consulta SQL
$sql="SELECT * FROM pregunta WHERE id_u='".$User."'";

if($consulta=$conexion->query($sql)){
    if($consulta->num_rows > 0){
            echo "<h2>Mis Ventas</h2>";
            echo '<table width="1300">';
            echo '<tr>';
            echo '<td> <b>Producto </b></td>';
            echo '<td> <b>Imagen </b></td>';
            echo '<td> <b>Precio </b></td>';
            echo '<td> <b>Descipción </b></td>';
            echo '</tr>';
            while($fila = $consulta->fetch_assoc()){
                  $id=$fila['id_p'];
                  $Boton1="<td><a href=borrar_preg.php?idP=$id> <button class='boton naranja'> Marcar Vendido </button></a></td>";
                  $Boton2="<td><a href=comentar.php?idP=$id> <button type='button' > Ver Comentarios </button></a></td>";
                  $Boton3="<td><a href=editarUser.php?idP=$id> <button type='button' > Editar Venta </button></a></td>";
                  $id_img=$fila['imagen'];
                  $imagen= "<img src='imgProd/".$id_img."' border='0' width='100' height='100'>";
                  echo '<tr>';
                  echo '<td>' . $fila['pregunta'] . '</td><td>'.$imagen.'</td><td> $ '.$fila['precio'] . ' MXM.</td><td>' . $fila['descripcion'] . '</td><td>'.$Boton1.'</td><td>'.$Boton2.'</td><td>'.$Boton3.'</td>';
                  echo '</tr>';
                }
              echo '</table>';
    }else{
        echo'<h2>Actualmente no tienes un historial de ventas</h2>';
        $imagen="<img src='../imgPag/noventas.png'  width='200' height='200'>";
        echo $imagen;
    }
}

?>
<br><br>
<a href=usuario_principal.php> <button type='button' > Regresar </button></a>

</body>
</html>
