<html>
  <head>
<title>Nueva Nueva</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <script language="javascript">
  function comprobar() {
     var Preg = document.sesion.pregunta.value;
     var Prec= document.sesion.precio.value;
     var Desc = document.sesion.descripcion.value;
     var Ima = document.sesion.imagen.value;

     if (Preg.length == 0)    {
        alert("Porfavor ingresar un nombre al producto");
        return false;
     }

     if (Prec.length == 0)    {
        alert("Porfavor ingresar un precio");
        return false;
     }

     if (Desc.length == 0)    {
        alert("Porfavor ingresar una descripción");
        return false;
     }

     if (Ima.length == 0)    {
        alert("Porfavor ingresar una imagen");
        return false;
     }

     return true;
  }
  </script>
</head>
<div style='position:absolute; top:200px; left:120px;'>
  <img src='../imgPag/ventaaaEx.png'  width='200' height='200'>
</div>
<div style='position:absolute; top:200px; left:1050px;'>
  <img src='../imgPag/ventaaaEx.png'  width='200' height='200'>
</div>
<body align="center">
<h2>Nueva Venta</h2>
<form action="proc_venta.php" enctype="multipart/form-data" method="post" name="sesion" id="sesion" onsubmit="return comprobar()">
<br>Porfavor ingresa el nombre de tu producto<br><br>
<input class="textbox" name="pregunta" type="text" size="25" height="15px"/>
<br><br>Precio<br><br>
<input class="textbox" name="precio" type="number" size="25" height="15px"/>
<br><br>Descripción<br><br>
<input class="textbox" name="descripcion" type="text" size="25" height="15px"/>

<br><br>Imagen<br><br>
 <input id="imagen" name="imagen" size="30" type="file" />


<br><br>
<label><input type="submit" id="bEnviar" name="Submit" value="Publicar Venta" />
</form>
<br><br>
<a href=usuario_principal.php> <button type='button' > Regresar </button></a>

</body>
</html>
