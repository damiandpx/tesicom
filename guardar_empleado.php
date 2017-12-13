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
	
	
	
$query="INSERT INTO empleados (id, idusuario, clave, telefono, estado, cargo, salario, direccion) VALUES ('$id','$idusuario','$clave','$telefono','$estado','$cargo','$salario','$direccion')";
			
	$resultado=$mysqli->query($query);
	

	echo ' <script language="javascript">alert("Empleado registrado con exito");</script> ';
	echo "<script>location.href='empleados.php'</script>";

?>


	