<?php

	$conex = mysql_connect("localhost", "root", "")	or die("no se pudo realizar la conexion");
		 mysql_select_db("dpw",$conex) or die("ERROR con la base de datos ");

		 $carnet = $_POST["carnet"];
		 $nombre = $_POST["nombre"];
		 $dia    = $_POST["fecha"];
		 $ciu    = $_POST["ciu"];
		 $doctor = $_POST["tq"];


		

		 $meter = mysql_query('INSERT INTO quejas (identificacion, nombre, fecha, ciudad, motivo) VALUES ("'.$carnet.'","'.mysql_real_escape_string($nombre).'","'.mysql_real_escape_string($dia).'","'.mysql_real_escape_string($ciu).'","'.mysql_real_escape_string($doctor).'")');

		 	if($meter){
		 		echo '<script language = javascript>
						alert("queja registrada correctamente")
						self.location = "quejas.php"
						</script>';
		 	}
		 	else{
		 		echo '<script language = javascript>
						alert("error al registrar queja")
						self.location = "quejas.php"
						</script>';
		 	}


?>