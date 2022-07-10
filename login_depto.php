<?php 

if (isset($_GET['login_depto'])) {
	
	$contraseña = $_GET ['contraseña'];
	
	
	$pass="timo3010";

	if ($contraseña == "timo3010") {
		header("Location:carga.php");
	}
	if ($contraseña != "timo3010") {
		header("Location:ventasi.php");
	}
	

	
	
}
?>
