
<!DOCTYPE html>
<html>
<head>
  <link href="../css/estilo.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <link rel="stylesheet" type="text/css" href="css/menu.css">

<title>Salir</title>
</head>
<body aling="center">
<h2 aling="center">Has Cerrado Sesión</h2>
<br><br>
<img src="../imgPag/cerrar.png" width="150" height="150">
<br><br>
<a href=../index.php> <button type='button' >Principal </button></a>
<?php
session_start();
session_destroy();
?>
</body>
</html>
