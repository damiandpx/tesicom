<?php
   $con = @mysql_connect("localhost","root","");
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());} 
   $database = mysql_select_db("tesicom",$con);
   if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}
$sql = "SELECT id, empresa, nombreencargado, telefono, correo, hubicacion FROM proveedores WHERE id='".$_POST['id']."'";
$result = mysql_query ($sql);



 
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	


<title>TesiCom</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="divCuerpo"><center>
<h1>Resultado de la busqueda</h1>
<table  class="flat-table" border=0 width="95%">
				 
				<tbody>
							<tr>
								<th><b>Codigo</b></th>
					<th><b>Empresa</b></th>
					<th><b>Encargado</b></th>
					<th><b>Telefono</b></th>
					<th><b>Correo</b></th>
					<th><b>Hubicacion</b></th>
								
				</tr>
			
					<?php  while ($row = mysql_fetch_row($result)){ ?>
						
						<tr>
							<td><?php echo $row['0'];?>
											
							</td>
							<td>
								<?php echo $row['1'];?>
							</td>
							<td>
								<?php echo $row['2'];?>
							</td>
							<td>
								<?php echo $row['3'];?>
							</td>
							<td>
								<?php echo $row['4'];?>
							</td>
							<td>
								<?php echo $row['5'];?>
							</td>
							
							
								
														</tr>
					<?php } ?>
				</tbody>
				</table><br><br>
				<input type="button" value="Regresar" onClick=" window.location.href='codigo_proveedores.php' ">
				</center>
				</div>
				</body>
				
				</html>