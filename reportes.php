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
<center> <h1>Ventas del dia</h1></center>

 
 <ul>
  <li><a  href="home.php">Home</a></li>
  <li><a href="productos.php">Productos</a></li>
  <li><a href="proveedores.php">Proveedores</a></li>
  <li><a href="empleados.php">Empleados</a></li>
   <li><a href="caja.php">Caja</a></li>
   <li><a class="active"  href="reportes.php">Reportes</a></li>
    <li><a href="salir.php">Cerrar</a></li>
	   <li><a>Empleado: <?php echo $_SESSION["usuarioactual"];?></a> </li>
</ul>
<br>
<br><center>

				 
				<form method="post" action="ejecuta_reportes.php">
<table  class="flat-table" border=0 width="95%">
<tr>
<td>
<strong>Seleccione fecha de inicio</strong><br><br>
<strong>Seleccione fecha final</strong><br>
</td>
<td>
<input type="date" name="fechai" step="1" min="2016-06-01" max="2016-06-31" value="<?php echo date("Y-m-d");?>"><br><br>
<input type="date" name="fechaf" step="1" min="2016-06-01" max="2016-06-31" value="<?php echo date("Y-m-d");?>"><br>

   </td>
</tr>


</table><br>
<input type="submit" value="Enviar" name="submit">
</form>
			


</center>

 </div>

</body>




</html>
</html>