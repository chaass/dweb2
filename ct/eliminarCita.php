<?php

	$conex = mysql_connect("localhost", "root", "")	or die("no se pudo realizar la conexion");
		 mysql_select_db("dpw",$conex) or die("ERROR con la base de datos ");

		 $carnet = $_POST["carnet"];
		 $identi = $_POST["identi"];
		 


		 $query = mysql_query('SELECT * FROM citas WHERE carnet="'.$carnet.'"');

		 if($existe = @mysql_fetch_object($query)){
		 	

		 $meter = mysql_query('DELETE  FROM citas WHERE carnet="'.$carnet.'" AND identificacion="'.$identi.'"');

		 	if($meter){
		 		echo '<script language = javascript>
						alert("cita eliminada correctamente")
						self.location = "eliminar.php"
						</script>';
		 	}
		 	else{
		 		echo '<script language = javascript>
						alert("error al eliminar cita ")
						self.location = "eliminar.php"
						</script>';
		 	}

		 }
		 else{
		 	
		 	echo '<script language = javascript>
						alert("no existe ninguna cita que corresponda al documento, no puede eliminar")
						self.location = "reprogramar.php"
						</script>';
		 }


?>		 