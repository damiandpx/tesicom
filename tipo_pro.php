<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	

<title>TesiCom</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <div id="divCuerpo">
<center> <h1>Buscar tipo de producto</h1></center>
<form name="buscar_producto" method="POST" action="ejecuta.php">
		<center>	<select width="50%" name="tipo" size="1" style="width:64%">
				<option selected value="0"> Elige una opción </option>
<option  value="Escritorio">Escritorio</option>
<option  value="Todo en uno">Todo en uno</option>
<option  value="Laptop">Laptop</option>
<option  value="Netbook">Netbook</option>
<option  value="Tablet">Tablet</option>
<option  value="Phablet">Phablet</option>
 <option  value="Estacion de trabajo">Estacion de trabajo</option>
  <option value="Servidor">Servidor</option>
</select><br><br>
		<input type="submit" name="Buscar" value="Buscar"/>
					<input type="button" value="Cancelar" onClick=" window.location.href='productos.php' ">
</center>
</form>



 </div>

</body>




</html>