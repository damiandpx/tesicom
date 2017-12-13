<?php

require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT id, idusuario, clave, telefono, estado, cargo, salario, direccion FROM empleados WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
	


?>
<!DOCTYPE html>
<html>
<head>




<title>TesiCom</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <div id="divCuerpo">
<center> <h1>Modificar Empleado</h1></center>

	<form name="modificar_producto" method="POST" action="mod_empleados.php">
			<center>
			<table class="flat-table" border=0 width="95%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Codigo</b></td>
					<td width="30"><input type="text" name="id" size="65" value="<?php echo $row['id']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="idusuario" size="65" value="<?php echo $row['idusuario']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Clave</b></td>
					<td width="30"><input type="text" name="clave" size="65" value="<?php echo $row['clave']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Telefono</b></td>
					<td width="30"><input type="text" name="telefono" size="65" value="<?php echo $row['telefono']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Estado</b></td>
					<td width="30"><input type="text" name="estado" size="65" value="<?php echo $row['estado']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Cargo</b></td>
					<td width="30"><input type="text" name="cargo" size="65" value="<?php echo $row['cargo']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Salario</b></td>
					<td width="30"><input type="text" name="salario" size="65" value="<?php echo $row['salario']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Direccion</b></td>
					<td width="30"><input type="text" name="direccion" size="65" value="<?php echo $row['direccion']; ?>" /></td>
				</tr>
				
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar"/>
					<input type="button" value="Cancelar" onClick=" window.location.href='empleados.php' ">
					</td>
				</tr>
			</table>
			</center>
		</form>
		
</center>




 </div>

</body>




</html>