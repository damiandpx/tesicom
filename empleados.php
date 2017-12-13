<?php

include("seguridad.php");

	require('conexion.php');
	
	$query="SELECT id, idusuario, clave, telefono, estado, cargo, salario, direccion FROM empleados";
	
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
<center> <h1>TesiCom</h1></center>

 
 <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="productos.php">Productos</a></li>
  <li><a href="proveedores.php">Proveedores</a></li>
  <li><a  class="active"  href="empleados.php">Empleados</a></li>
   <li><a href="caja.php">Caja</a></li>
   <li><a href="reportes.php">Reportes</a></li>
    <li><a href="salir.php">Cerrar</a></li>
	   <li><a>Empleado: <?php echo $_SESSION["usuarioactual"];?></a> </li>
</ul>
<br>
<br><center>
</center>
<center>
<table  width="95%">
<tr>
<td width="7.5%">
 <a href="empleadonuevo.html"><img src="imagenes/agregar.png" width="30" title="Agregar registro" ></a>
</td>
<td width="13.5%"><center>Buscar por:</center></td>
<td width="15%">
<a href="nombre_empleado.php"><img src="imagenes/nombre.png" width="40" title="Nombres" ></a>

  <a href="cargo_empleado.php"><img src="imagenes/cargo.png" width="30" title="Cargos" ></a>
  
  
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
					<th><b>Nombre</b></th>
					<th><b>Direccion</b></th>
					<th><b>Telefono</b></th>
		
					<th><b>Cargo</b></th>
					<th><b>Salario</b></th>
					<th></th>
					<th></th>
				</tr>
			
					<?php while($row=$resultado->fetch_assoc()){ ?>
						
						<tr>
						<td><?php echo $row['id'];?>
							</td>
							<td><?php echo $row['idusuario'];?>
							</td>
							<td>
								<?php echo $row['direccion'];?>
							</td>
							<td>
								<?php echo $row['telefono'];?>
							</td>
							
							<td>
								<?php echo $row['cargo'];?>
							</td>
							<td>
								$<?php echo $row['salario'];?>
							</td>
							
							<td>
							
							 <a href="empleadomodificar.php?id=<?php echo $row['id'];?>"><img src="imagenes/editar.png" width="30" title="Editar registro" ></a>
							</td>
							<td>
						<a href="empleadoeliminar.php?id=<?php echo $row['id'];?>"><img src="imagenes/eliminar.png" width="30" title="Eliminar registro" ></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				</table>
</center>




 </div>

</body>




</html>