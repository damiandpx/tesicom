<?php
session_start();
ob_start(); 

include("seguridad.php");

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
<title>TesiCom</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <div id="divCuerpo">
<center> <h1>Caja</h1></center>

 
 <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="productos.php">Productos</a></li>
  <li><a href="#about">Proveedores</a></li>
  <li><a href="#about">Empleados</a></li>
  <li><a href="#about">Clientes</a></li>
  <li><a class="active" href="caja.php">Caja</a></li>
   <li><a href="">Reportes</a></li>
    <li><a href="salir.php">Cerrar</a></li>
	   <li><a>Empleado: <?php echo $_SESSION["usuarioactual"];?></a> </li>
</ul>
<br>
<br>
<center>
<p>Esta seguro que es el producto?</p>
</center>
<center>
<?php

$a = 0;

$buscar=$_POST['id'];
$piezas=$_POST['piezas'];


if (!isset($buscar)){ 
      echo "Debe especificar una cadena a bucar"; 
      echo "</html></body> \n"; 
      exit; 
} 

$link = @mysql_connect("localhost","root","");
mysql_select_db("tesicom", $link); 


$result = mysql_query("SELECT id, tipo, marca, modelo, pventa, existencia FROM productos WHERE id LIKE '%$buscar%' ORDER BY id", $link); 
if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["id"]."</td> \n"; 
            echo "<td>".$row["tipo"]."</td> \n"; 
            echo "<td>".$row["marca"]."</td> \n"; 
            echo "<td>".$row["modelo"]."</td> \n"; 
            echo "<td>".$row["pventa"]."</td> \n"; 
            echo "<td>".$row["existencia"]."</td> \n"; 

$existencia1=$row['existencia'];
$id1=$row['id'];
$marca1=$row['marca'];
$modelo1=$row['modelo'];
$precio=$row['pventa'];

 
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
			$pago=$piezas*$precio;
$resultado= $existencia1-$piezas;

if($resultado>=$a):
  echo "<br/> Productos disponibles ".$resultado;
  echo "<br/> Debe pagar un total de $".$pago; 
$_SESSION['resultado']=$pago; 
$_SESSION['pro']=$piezas;
$_SESSION['uni']=$precio;
 $_SESSION['id2']=$id1;
 $_SESSION['marca2']=$marca1;
 $_SESSION['modelo2']=$modelo1;
  $_SESSION['existencia']=$resultado;
  echo "<br/>";
  
echo '<a href="caja_compra.php">Comprar</a>'; 
 echo " ----------      ";
echo '<a href="caja.php">Cancelar</a>'; 
    
  else:
    echo "<br/>";
echo " No hay suficientes productos disponibles para comprar ";
  echo "<br/>";
echo '<a href="caja.php">Otra vez</a>'; 
endif;


} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 



?>



</center>

 </div>

</body>




</html>