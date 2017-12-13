<?php
session_start();
ob_start(); 
$exis= $_SESSION['existencia']; 
require('conexion.php');
$vendedor=$_POST['usuarioactual'];
	$codigoproducto=$_POST['id'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$nopiezas=$_POST['piezas'];
	$precioun=$_POST['precio'];
	$garantia=$_POST['garantia'];
	$fecha=$_POST['time'];
	$nombrecliente=$_POST['nombre'];
	$totalpagar=$_POST['pago'];
	
	echo " </br> vemdedor ".$vendedor;
	echo " </br> codigoproducto ".$codigoproducto;
	echo " </br> marca ".$marca;
	echo " </br> modelo ".$modelo;
	echo " </br> nopiezas ".$nopiezas;
echo " </br> precio ".$precioun;
echo " </br> garantia ".$garantia;
echo " </br> fecha ".$fecha;
echo " </br> cliente ".$nombrecliente;
echo " </br> pago ".$totalpagar;
	echo " </br> qedan ".$exis;

  
$query="INSERT INTO ventas (venderdor, codigoproducto, marca, modelo, nopiezas, precioun, garantia, fecha, nombrecliente, totalpagar) VALUES ('$vendedor','$codigoproducto','$marca','$modelo','$nopiezas','$precioun','$garantia','$fecha','$nombrecliente','$totalpagar')";
$resultado=$mysqli->query($query);
$query="UPDATE productos SET  existencia='$exis' WHERE id='$codigoproducto'";
$resultado=$mysqli->query($query);

	echo ' <script language="javascript">alert("Compra registrada con exito");</script> ';
echo "<script>location.href='caja.php'</script>";
 
?>