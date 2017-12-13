<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$tipo=$_POST['password'];
	$marca=$_POST['email'];
	$modelo=$_POST['email'];
	$caracteristicas=$_POST['email'];
	$precio=$_POST['email'];
	$pventa=$_POST['email'];
	$existencia=$_POST['email'];
	
$query="INSERT INTO productos (id, tipo, marca, modelo, caracteristicas, precio, pventa, existencia) VALUES ('$id','$tipo','$marca','$modelo','$caracteristicas','$precio','$pventa','$existencia')";
			
	$resultado=$mysqli->query($query);
	

	echo ' <script language="javascript">alert("Producto registrado con exito");</script> ';
	echo "<script>location.href='productos.php'</script>";

?>


	