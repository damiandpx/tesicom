<?php
include("seguridad.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
<title>TesiCom</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <div id="divCuerpo">
<center> <h1>TesiCom</h1></center>

 
 <ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="productos.php">Productos</a></li>
  <li><a href="proveedores.php">Proveedores</a></li>
  <li><a href="empleados.php">Empleados</a></li>
   <li><a href="caja.php">Caja</a></li>
   <li><a href="reportes.php">Reportes</a></li>
    <li><a href="salir.php">Cerrar</a></li>
	   <li><a>Empleado: <?php echo $_SESSION["usuarioactual"];?></a> </li>
</ul>
<br>
<br><center>
<table  class="flat-table" border=0 width="95%">
<tr><td width="47%"><img src="imagenes/1.png" width="300" height="180"></td><td width="47%"><img src="imagenes/2.png" width="300" height="180"></td></tr>
<tr><td width="47%"><img src="imagenes/3.png" width="300" height="180"></td><td width="47%"><img src="imagenes/4.png" width="300" height="180"></td></tr>

</table></center>

 </div>

</body>




</html>
