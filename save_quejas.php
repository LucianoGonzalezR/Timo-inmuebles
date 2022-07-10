<?php 

include("Basededatos.php");


if (isset($_POST['save_quejas'])) {

	
	$descripcion = $_POST ['descripcion'];
	$clientedni = $_POST ['cliente_dni'];
	$tipo = $_POST ['tipo'];
	
	

	$query = "INSERT INTO sugerencia (id ,descripcion,cliente_dni,tipo) VALUES ( NULL,'$descripcion', '$clientedni', '$tipo')";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");

	}


	$_SESSION ['message'] = 'Contrato guardado satisfactoriamente';
	$_SESSION ['message_type'] = 'success';

	header ("Location: satisfactoriodos.php");
	
}


?>
