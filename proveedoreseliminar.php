<?php

require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT id, empresa, nombreencargado, telefono, correo, hubicacion FROM proveedores WHERE id='$id'";
	
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
<center> <h1>Eliminar Proveedor</h1></center>

	<form name="modificar_producto" method="POST" action="eliminar_proveedor.php">
			<center>
			<table class="flat-table" border=0 width="95%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Codigo</b></td>
					<td width="30"><input type="text" name="id" size="65" value="<?php echo $row['id']; ?>" /disabled></td>
				</tr>
				
				<tr>
					<td width="20"><b>Empresa</b></td>
					<td width="30"><input type="text" name="empresa" size="65" value="<?php echo $row['empresa']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Encargado</b></td>
					<td width="30"><input type="text" name="nombreencargado" size="65" value="<?php echo $row['nombreencargado']; ?>" /disabled></td>
				</tr>
				
				<tr>
					<td width="20"><b>Telefono</b></td>
					<td width="30"><input type="text" name="telefono" size="65" value="<?php echo $row['telefono']; ?>" /disabled></td>
				</tr>
				
				<tr>
					<td width="20"><b>Correo</b></td>
					<td width="30"><input type="text" name="correo" size="65" value="<?php echo $row['correo']; ?>" /disabled></td>
				</tr>
				
				<tr>
					<td width="20"><b>Hubicacion</b></td>
					<td width="30"><input type="text" name="hubicacion" size="65" value="<?php echo $row['hubicacion']; ?>" /disabled></td>
				</tr>
				
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Eliminar" value="Eliminar"/>
					<input type="button" value="Cancelar" onClick=" window.location.href='proveedores.php' ">
					</td>
				</tr>
			</table>
			</center>
		</form>
		
</center>




 </div>

</body>




</html>