<?php
/* A continuaci�n, realizamos la conexi�n con nuestra base de datos en MySQL */ 
$link = @mysql_connect("localhost","root",""); 
mysql_select_db("tesicom", $link); 

/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la funci�n htmlentities para evitar inyecciones SQL. */ 
$myusuario = mysql_query("select idusuario from empleados where idusuario = '".htmlentities($_POST["usuario"])."'",$link); 
$nmyusuario = mysql_num_rows($myusuario); 

//Si existe el usuario, validamos tambi�n la contrase�a ingresada y el estado del usuario... 
if($nmyusuario != 0)
{ 
  $sql = "select idusuario from empleados where estado = 1 and idusuario = '".htmlentities($_POST["usuario"])."' and clave = '".md5(htmlentities($_POST["clave"]))."'"; 
  $myclave = mysql_query($sql,$link); 
  $nmyclave = mysql_num_rows($myclave); 
  //Si el usuario y clave ingresado son correctos (y el usuario est� activo en la BD), creamos la sesi�n del mismo. 
  if($nmyclave != 0)
  { 
      session_start(); 
      //Guardamos dos variables de sesi�n que nos auxiliar� para saber si se est� o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 
      //nombre del usuario logueado. 
      //Direccionamos a nuestra p�gina principal del sistema. 
      header ("Location: home.php"); 
   }
   else{ 
      echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"index.html\"</script>"; 
   } 
}
else
{ 
    echo"<script>alert('El usuario no existe.'); window.location.href=\"index.html\"</script>"; 
} 
mysql_close($link); 
?>