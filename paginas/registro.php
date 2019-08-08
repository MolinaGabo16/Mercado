<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<title>Nuevo Usuario</title>
<script language="javascript">
function comprobar() {
   var id_u = document.sesion.id_usuario.value;
   var nombre = document.sesion.nombre1.value;
   var contra = document.sesion.contrasenia.value;

   if (id_u.length == 0)    {
      alert("Porfavor ingresa un correo electrónico");
      return false;
   }
   if (nombre.length==0)    {
      alert("Porfavor ingresa tu nombre.");
      return false;
   }
   if (contra.length==0)    {
      alert("Porfavor ingresa tu contraseña.");
      return false;
   }

   return true;
}
</script>

</head>
<body align="center">
<img src="../imgPag/2.png" width="300" height="300">
<form action="registro1.php" method="post" name="sesion" id="sesion" onsubmit="return comprobar()">

<br>Correo Electrónico <br>
<input class="textbox" name="id_usuario" type="text" size="25" height="15px"/>
<br>Nombre <br>
<input class="textbox" name="nombre1" type="text" size="25" height="15px"/>
<br>Contraseña<br>
<input class="textbox" name="contrasenia" type="password" size="25" height="15px"/>


<br><br>
<input type="reset" id="resetear" value="Restablecer" />
<label><input type="submit" id="bEnviar" name="Submit" value="Registrar" />
<br><br>
<a href=../index.php> <button type='button' > Regresar </button></a>
</form>


</body>
</html>
