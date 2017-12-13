<?php 
	
	require('conexion.php');
	
	$empresa=$_POST['empresa'];
	
	$query="DELETE FROM proveedores WHERE empresa='$empresa'";
	
	$resultado=$mysqli->query($query);
	
	

	echo ' <script language="javascript">alert("Proveedor eliminado con exito");</script> ';
	echo "<script>location.href='proveedores.php'</script>";

?>
