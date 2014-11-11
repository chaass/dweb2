<?php
//Conexion a la DB 
$conex = mysql_connect("localhost", "root", "")	or die("no se pudo realizar la conexion");
		 mysql_select_db("dpw",$conex) or die("ERROR con la base de datos ");

//inicio variables de secion
if(!isset($_SESSION)){
	session_start();
}			


//resibir datos del formulario
$userr = $_POST['user'];
$contra = $_POST['pass'];


// consulta si los datos estan en db
$consulta= "SELECT * FROM datos WHERE usuario='".$userr."' AND contrasena='".$contra."'";
$resultado = mysql_query($consulta,$conex) or die(mysql_error());
$fila = mysql_fetch_array($resultado);

//si el usuario no existe
if(!$fila[0]){
	echo '<script language = javascript>
	alert("usuario y/o password incorrectos, verifique!!!")
	self.location = "index.html"
	</script>';
}
//si el usuario y contraseña son correctos
else{

	$_SESSION['idUs'] = $fila['id'];
	$_SESSION['nombreUs'] = $fila['nombre'];
   
	header("Location: index_user.php");
}
?>