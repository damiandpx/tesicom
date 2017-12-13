<?php

include("seguridad.php");

	require('conexion.php');
	
	$query="SELECT id, tipo, marca, modelo, caracteristicas, pventa, existencia FROM productos";
	
	$resultado=$mysqli->query($query);
	
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
<center> <h1>Mis productos</h1></center>

 
<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a class="active" href="productos.php">Productos</a></li>
  <li><a href="proveedores.php">Proveedores</a></li>
  <li><a href="empleados.php">Empleados</a></li>
   <li><a href="caja.php">Caja</a></li>
   <li><a href="reportes.php">Reportes</a></li>
    <li><a href="salir.php">Cerrar</a></li>
	   <li><a>Empleado: <?php echo $_SESSION["usuarioactual"];?></a> </li>
</ul>

<br>
<br>
</li><center>
<table  width="95%">
<tr>
<td width="7.5%">
 <a href="pronuevo.html"><img src="imagenes/agregar.png" width="30" title="Agregar registro" ></a>
</td>
<td width="13.5%"><center>Buscar por:</center></td>
<td width="15%">
<a href="tipo_pro.php"><img src="imagenes/ima2.png" width="25" title="Tipos" ></a>

  <a href="marca_pro.php"><img src="imagenes/marcas.png" width="30" title="Marcas" ></a>
  
    <a href="codigo_pro.php"><img src="imagenes/codigo.png" width="44" title="Codigos" ></a>
</td>
<td width="59%">
</td>
</tr>
</table>
</center>
<center>
	<table  class="flat-table" border=0 width="95%">
				 
				<tbody>
							<tr>
						<th><b>Codigo</b></th>		
					<th><b>Tipo</b></th>
					<th><b>Marca</b></th>
					<th><b>Modelo</b></th>
					<th><b>Caracteristicas</b></th>
					<th><b>Precio</b></th>
					<th><b>Existencia</b></th>
					<th></th>
					<th></th>
				</tr>
			
					<?php while($row=$resultado->fetch_assoc()){ ?>
						
						<tr>
						<td><?php echo $row['id'];?>
							</td>
							<td><?php echo $row['tipo'];?>
							</td>
							<td>
								<?php echo $row['marca'];?>
							</td>
							<td>
								<?php echo $row['modelo'];?>
							</td>
							<td>
								<?php echo $row['caracteristicas'];?>
							</td>
							<td>
								$<?php echo $row['pventa'];?>
							</td>
							<td>
								<?php echo $row['existencia'];?>
							</td>
							
							<td>
							
							 <a href="promodificar.php?id=<?php echo $row['id'];?>"><img src="imagenes/editar.png" width="30" title="Editar registro" ></a>
							</td>
							<td>
						<a href="proeliminar.php?id=<?php echo $row['id'];?>"><img src="imagenes/eliminar.png" width="30" title="Eliminar registro" ></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				</table>
</center>
















 </div>

</body>




</html>