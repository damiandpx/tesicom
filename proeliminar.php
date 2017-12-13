<?php

require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT tipo, marca, modelo, caracteristicas, precio, pventa, existencia FROM productos WHERE id='$id'";
	
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
<center> <h1>Eliminar producto</h1></center>

	<form name="eliminar_producto" method="POST" action="eliminar_producto.php">
			<center>
			<table class="flat-table" border=0 width="95%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					
					<td width="20"><b>Tipo</b></td>
					<td width="30"><input type="text" name="tipo" size="65" value="<?php echo $row['tipo']; ?>" disabled/></td>
				</tr>
				
				<tr>
					<td width="20"><b>Marca</b></td>
					<td width="30"><input type="text" name="marca" size="65" value="<?php echo $row['marca']; ?>" disabled /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Modelo</b></td>
					<td width="30"><input type="text" name="modelo" size="65" value="<?php echo $row['modelo']; ?>" /></td>
				</tr>
				
				<tr>
					<td width="20"><b>Caracteristicas</b></td>
					<td width="30"><input type="text" name="caracteristicas" size="85" value="<?php echo $row['caracteristicas']; ?>" disabled/></td>
				</tr>
				
				<tr>
					<td width="20"><b>Precio</b></td>
					<td width="30"><input type="text" name="precio" size="65" value="<?php echo $row['precio']; ?>" disabled/></td>
				</tr>
				
				<tr>
					<td width="20"><b>Precio venta</b></td>
					<td width="30"><input type="text" name="pventa" size="65" value="<?php echo $row['pventa']; ?>" disabled/></td>
				</tr>
				
				<tr>
				
					<td width="20"><b>Existencia</b></td>
					<td width="30"><input type="text" name="existencia" size="65" value="<?php echo $row['existencia']; ?>" disabled/></td>
				</tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Eliminar" value="Eliminar"/>
					<input type="button" value="Cancelar" onClick=" window.location.href='productos.php' "></td>
				</tr>
			</table>
			</center>
		</form>
		
</center>




 </div>

</body>




</html>