<?php 

if (isset($_GET['login_personal'])) {
	
	$contraseña = $_GET ['contraseña'];
	
	
	$pass="dynasty";

	if ($contraseña == "dynasty") {
		header("Location:visitas.php");
	}
	if ($contraseña != "dynasty") {
		header("Location:vendedoresi.php");
	}
	

	
	
}
?>
