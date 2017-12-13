<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$idusuario=$_POST['idusuario'];
	$clave=$_POST['clave'];
	$telefono=$_POST['telefono'];
	$estado=$_POST['estado'];
	$cargo=$_POST['cargo'];
	$salario=$_POST['salario'];
	$direccion=$_POST['direccion'];
	
	
	
	$query="UPDATE empleados SET id='$id', idusuario='$idusuario', clave='$clave', telefono='$telefono', estado='$estado', cargo='$cargo', salario='$salario', direccion='$direccion' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);

	echo ' <script language="javascript">alert("Empleado modificado con exito");</script> ';
	echo "<script>location.href='empleados.php'</script>";

?>


	