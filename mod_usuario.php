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
	
	$query="UPDATE productos SET tipo='$tipo', marca='$marca', modelo='$modelo', caracteristicas='$caracteristicas', precio='$precio', pventa='$pventa', existencia='$existencia' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);

	echo ' <script language="javascript">alert("Producto modificado con exito");</script> ';
	echo "<script>location.href='productos.php'</script>";

?>


				
				