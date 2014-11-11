<?php

	$conex = mysql_connect("localhost", "root", "")	or die("no se pudo realizar la conexion");
		 mysql_select_db("dpw",$conex) or die("ERROR con la base de datos ");

		 $carnet = $_POST["carnet"];
		 $identi = $_POST["identi"];
		 $nombre = $_POST["nombre"];
		 $dia    = $_POST["fecha"];
		 $hora   = $_POST["hora"];
		 $doctor = $_POST["doctor"];


		 $query = mysql_query('SELECT * FROM citas WHERE carnet="'.$carnet.'"');
		 $query2 = mysql_query('SELECT * FROM citas WHERE dia="'.$dia.'" AND doctor="'.$doctor.'" AND hora="'.$hora.'"');
		  
		 if($existe = @mysql_fetch_object($query)){
		 	
		 if($existe = @mysql_fetch_object($query2)){
		 	echo 'ya existe una cita apartada a esa hora con el doctor elegido ese dia';
		 }
		 else{

		 $meter = mysql_query('UPDATE citas SET carnet="'.$carnet.'", identificacion="'.$identi.'", nombre="'.$nombre.'", dia="'.$dia.'", doctor="'.$doctor.'" WHERE carnet="'.$carnet.'"');

		 	if($meter){
		 		echo '<script language = javascript>
						alert("cita reprogramada correctamente")
						self.location = "reprogramar.php"
						</script>';
		 	}
		 	else{
		 		echo '<script language = javascript>
						alert("error al reprogramar cita ")
						self.location = "reprogramar.php"
						</script>';
		 	}
			
			}

		 }
		 else{
		 	
		 	echo '<script language = javascript>
						alert("no existe ninguna cita que corresponda al documento, no puede reprogramar")
						self.location = "reprogramar.php"
						</script>';
		 }


?>		 