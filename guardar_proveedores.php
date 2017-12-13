<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$empresa=$_POST['empresa'];
	$encargado=$_POST['encargado'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$hubicacion=$_POST['hubicacion'];
	
	
$query="INSERT INTO proveedores (id, empresa, nombreencargado, telefono, correo, hubicacion) VALUES ('$id','$empresa','$encargado','$telefono','$correo','$hubicacion')";
			
	$resultado=$mysqli->query($query);
	

	echo ' <script language="javascript">alert("Proveedor registrado con exito");</script> ';
	echo "<script>location.href='proveedores.php'</script>";

?>


	