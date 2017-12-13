<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	

<title>TesiCom</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <div id="divCuerpo">
<center> <h1>Buscar cargos de empleado</h1></center>
<form name="buscar_empleado" method="POST" action="ejecuta7.php">
		<center>	
		
		
		<select width="50%" name="cargo" size="1" style="width:64%">
				<option selected value="0"> Elige una opción </option>
<option  value="Vendedor">Vendedor</option>
<option  value="Almacenista">Almacenista</option>
<option  value="Vigilante">Vigilante</option>
<option  value="Intendencia">Intendencia </option>
<option  value="Ayudante General">Ayudante General</option>
<option  value="Administrativo">Administrativo</option>
</select>
		
		
		<br><br>
		<input type="submit" name="Buscar" value="Buscar"/>
					<input type="button" value="Cancelar" onClick=" window.location.href='empleados.php' ">
</center>
</form>



 </div>

</body>




</html>