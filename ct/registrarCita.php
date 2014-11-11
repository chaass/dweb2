<?php

	$conex = mysql_connect("localhost", "root", "")	or die("no se pudo realizar la conexion");
		 mysql_select_db("dpw",$conex) or die("ERROR con la base de datos ");

		 $carnet = $_POST["carnet"];
		 $identi = $_POST["identi"];
		 $nombre = $_POST["nombre"];
		 $dia    = $_POST["fecha"];
		 $hora  =  $_POST["hora"];
		 $doctor = $_POST["doctor"];


		 $query = mysql_query('SELECT * FROM citas WHERE carnet="'.$carnet.'"');
		 $query2 = mysql_query('SELECT * FROM citas WHERE dia="'.$dia.'" AND doctor="'.$doctor.'" AND hora="'.$hora.'"');

		 if($existe = @mysql_fetch_object($query)){
		 	
			echo '<script language = javascript>
						alert( "Ya hay una cita apartada con ese numero de carnet")
						self.location = "crearcita.php"
						</script>';
		 }
		 else if($existe = @mysql_fetch_object($query2)){
		 	echo 'ya existe una cita apartada a esa hora con el doctor elegido ese dia';
		 }
		 else{
		  	$meter = mysql_query('INSERT INTO citas (carnet, identificacion, nombre, dia, doctor,hora) VALUES ("'.$carnet.'","'.$identi.'","'.         mysql_real_escape_string($nombre).'","'.mysql_real_escape_string($dia).'","'.mysql_real_escape_string($doctor).'","'.$hora.'")');

		 	if($meter){
		 		echo '<script language = javascript>
						alert("Cita registrada correctamente")
						self.location = "crearcita.php"
						</script>';
		 	}
		 	else{
		 		echo '<script language = javascript>
						alert("error al registrar su Cita")
						self.location = "crearcita.php"
						</script>';
		 	}
		 }


?>		 