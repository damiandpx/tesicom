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
<center> <h1>Caja</h1></center>

 
<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a href="productos.php">Productos</a></li>
  <li><a href="proveedores.php">Proveedores</a></li>
  <li><a href="empleados.php">Empleados</a></li>
   <li><a  class="active" href="caja.php">Caja</a></li>
   <li><a href="reportes.php">Reportes</a></li>
    <li><a href="salir.php">Cerrar</a></li>
	   <li><a>Empleado: <?php echo $_SESSION["usuarioactual"];?></a> </li>
</ul>

<br>
<br><center>

<form method="post" action="caja_ejecuta.php">
<table  class="flat-table" border=0 width="95%">
<tr>
<td>
<strong>Codigo de producto</strong><br>
<br>
 <strong>No. de Piezas a comprar</strong>
</td>
<td>
<input type="text" name="id" class="form-control"  /><br><br>
  <input type="text" name="piezas" class="form-control"  />
   </td>
</tr>


</table><br>
<input type="submit" value="Enviar" name="submit">
</form>
</center>

 </div>

</body>




</html>