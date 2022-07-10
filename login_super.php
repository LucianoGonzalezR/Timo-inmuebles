<?php 

if (isset($_GET['login_super'])) {
	
	$contraseña = $_GET ['contraseña'];
	
	
	$pass="mozas123";

	if ($contraseña == "mozas123") {
		header("Location:consulta.php");
	}
	if ($contraseña != "mozas123") {
		header("Location:contactoi.php");
	}
	

	
	
}
?>
