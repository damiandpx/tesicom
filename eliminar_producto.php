<?php 
	
	require('conexion.php');
	
	$modelo=$_POST['modelo'];
	
	$query="DELETE FROM productos WHERE modelo='$modelo'";
	
	$resultado=$mysqli->query($query);
	
	

	echo ' <script language="javascript">alert("Producto eliminado con exito");</script> ';
	echo "<script>location.href='productos.php'</script>";

?>
