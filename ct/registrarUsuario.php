<?php

	$conex = mysql_connect("localhost", "root", "")	or die("no se pudo realizar la conexion");
		 mysql_select_db("dpw",$conex) or die("ERROR con la base de datos ");

		 $nombre = $_POST["nombreuser"];
		 $apelli = $_POST["apellidouser"];
		 $identi = $_POST["documentouser"];
		 $carnet = $_POST["carnetuser"];
		 $corr   = $_POST["correouser"];
		 $user   = $_POST["user"];
		 $pas    = $_POST["pass"];




		 $query = mysql_query('SELECT * FROM datos WHERE usuario="'.$user.'"');

		 if($existe = @mysql_fetch_object($query)){
		 	echo '<script language = javascript>
						alert("ya existe un usuario registrado con ese nombre")
						self.location = "agregarUsuario.html"
						</script>';
		 }
		 else{
		 	$meter = mysql_query('INSERT INTO datos (nombre, apellido, documento, carnet, correo, usuario, contrasena) VALUES ("'.mysql_real_escape_string($nombre).'","'.mysql_real_escape_string($apelli).'","'.$identi.'","'.$carnet.'","'.mysql_real_escape_string($corr).'","'.mysql_real_escape_string($user).'","'.mysql_real_escape_string($pas).'")');

		 	if($meter){
		 		echo '<script language = javascript>
						alert("usuario registrado correctamente")
						self.location = "index.html"
						</script>';
		 	}
		 	else{
		 		echo '<script language = javascript>
						alert("error al registrar usuario")
						self.location = "agregarUsuario.html"
						</script>';
		 	}
		 }


?>		 