<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$tipo=$_POST['tipo'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$caracteristicas=$_POST['caracteristicas'];
	$precio=$_POST['precio'];
	$pventa=$_POST['pventa'];
	$existencia=$_POST['existencia'];
	
$query="INSERT INTO productos (id, tipo, marca, modelo, caracteristicas, precio, pventa, existencia) VALUES ('$id','$tipo','$marca','$modelo','$caracteristicas','$precio','$pventa','$existencia')";
			
	$resultado=$mysqli->query($query);
	

	echo ' <script language="javascript">alert("Producto registrado con exito");</script> ';
	echo "<script>location.href='productos.php'</script>";

?>


	