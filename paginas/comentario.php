<?php
session_start();
?>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Comentario</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body align="center">
<h2>Comentarios</h2>
<img src="../imgPag/comentario.png" width="150" height="150">
<br>
La finalidad de este apartado es para que puedas dar tu opinión acerca de la página web,<br>
es decir, tu punto de vista en cuanto al diseño, funcionalidad, algunas mejoras que se puedan realizar <br>
y todo lo que desees opinar al respecto. <br>
Muchas Gracias

<form action="enviarComentario.php" method="post" name="sesion" id="sesion" onsubmit="">
<br><br>
  <textarea name="comentarios" placeholder="Escribe tu comentario aquí..." rows="10" cols="40"></textarea>
<br><br>
<input type="reset"  id="resetear" value="Restablecer" />
<label><input type="submit" id="bEnviar" name="Submit" value="Enviar" /></a>
</label>

</form>
<a href=usuario_principal.php> <button type='button' > Regresar </button></a>
</body>
</html>
