<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	
	$query="DELETE FROM empleados WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	

	echo ' <script language="javascript">alert("Empleado eliminado con exito");</script> ';
	echo "<script>location.href='empleados.php'</script>";

?>
