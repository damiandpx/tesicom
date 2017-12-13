<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$empresa=$_POST['empresa'];
	$nombreencargado=$_POST['nombreencargado'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$hubicacion=$_POST['hubicacion'];
	
	
	
	$query="UPDATE proveedores SET id='$id', empresa='$empresa', nombreencargado='$nombreencargado', telefono='$telefono', correo='$correo', hubicacion='$hubicacion' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);

	echo ' <script language="javascript">alert("Proveedor modificado con exito");</script> ';
	echo "<script>location.href='proveedores.php'</script>";

?>


	