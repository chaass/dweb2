<?php
session_start();
if($_SESSION['nombreUs']){	
	session_destroy();
	echo '<script language = javascript>
	alert("Su secion ha finalizado")
	self.location = "index.html"
	</script>';
}
else{
	echo '<script language = javascript>
	alert("No ha iniciado secion, hagalo!!!!")
	self.location = "index.html"
	</script>';
}

?>