<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Iniciar Sesi&oacuten</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<script language="javascript">
function comprobar() {
   var mail = document.sesion.id_u.value;
   var contra = document.sesion.contrasenia.value;

   if (mail.length == 0)    {
      alert("Porfavor ingresa tu ID de Usuario");
      return false;
   }
   if (contra.length==0)    {
      alert("Porfavor ingresa una contraseña.");
      return false;
   }
   return true;
}
</script>

</head>
<body align="center">
<img src="../imgPag/login.png">
<form action="proc_login.php" method="post" name="sesion" id="sesion" onsubmit="return comprobar()">
Correo electrónico <br>
<input class="textbox" name="id_u" type="text" size="25" height="15px"/>
<br/>
Contraseña<br>
<input class="textbox" name="contrasenia" type="password" size="25" height="15px"/>
<br/>
<br><br>
<input type="reset"  id="resetear" value="Restablecer" />
<label><input type="submit" id="bEnviar" name="Submit" value="Enviar" /></a>
</label>

</form>
<br><br>
<a href=../index.php> <button type='button' > Regresar </button></a>
</body>
</html>
