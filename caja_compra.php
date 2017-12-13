<?php 
session_start();
ob_start(); 

$id= $_SESSION['id2'];
$marca= $_SESSION['marca2'];
$modelo= $_SESSION['modelo2'];
 $piezas= $_SESSION['pro'];
 $precio= $_SESSION['uni'];
  $pago= $_SESSION['resultado']; 
$exis= $_SESSION['existencia']; 

$usuarioactual= $_SESSION["usuarioactual"];
$time = time();
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
<center> <h1>Confirmar compra </h1></center>
<form name="caja_compra" method="POST" action="guardar_compra.php">
			<center>
			<table class="flat-table" border=0 width="95%">
				<tr>
				<td width="180">Vendedor:
				</td>
					<td width="30"><input type="text" name="usuarioactual" size="65" value="<?php echo $usuarioactual; ?>" /></td>
				
				</tr>
				
				
				
				<tr>
				<td width="180">Codigo Producto:
				</td>
			<td width="30"><input type="text" name="id" size="65" value="<?php echo $id; ?>" /></td>
				</tr>

				<tr>
				<td width="180">Marca:
				</td>
				<td width="30"><input type="text" name="marca" size="65" value="<?php echo $marca; ?>" /></td>
				</tr>

				<tr>
				<td width="180">Modelo:
				</td>
				<td width="30"><input type="text" name="modelo" size="65" value="<?php echo $modelo; ?>" /></td>
				</tr>

				<tr>
				<td width="180">No. Piezas:
				</td>
				<td width="30"><input type="text" name="piezas" size="65" value="<?php echo $piezas; ?>" /></td>
				</tr>
				
				<tr>
				<td width="180">Precio c/u:
				</td>
				<td width="30"><input type="text" name="precio" size="65" value="<?php echo $precio; ?>" /></td>
				</tr>
				
				
				<tr>
				<td width="180">Garantia de:
				</td>
				<td>
					<select width="50%" name="garantia" size="1" style="width:75%">
				<option selected value="0"> Elige una opción </option>
<option  value="6 meses">6 meses</option>
<option  value="1 año">12 meses</option>
<option  value="2 años">24 meses</option>

</select>
				
				</td>
				</tr>
				
				<tr>
				<td width="180">Fecha:
				</td>
				
				<td width="30"><input type="text" name="time" size="65" value="<?php echo date("Y-m-d", $time); ?>" /></td>
				
				</tr>
				
			<tr>
				<td width="180">Nombre cliente
				</td>
				<td><input type="text" name="nombre" size="1" style="width:75%"  />
				</td>
				</tr>
				
				<tr>
				<td width="180">Total pagar:
				</td>
				<td width="30"><input type="text" name="pago" size="65" value="<?php echo $pago;?>" /></td>
				</tr>
				


<tr>
			<td colspan="2"><center><input type="submit" name="guardar" value="Guardar"/>
					<input type="button" value="Cancelar" onClick=" window.location.href='caja.php' ">
					</center></td>
				</tr>
			</table>
			
		</form>

</center>




 </div>

</body>




</html>