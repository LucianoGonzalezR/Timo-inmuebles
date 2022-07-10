<?php 

include("Basededatos.php");


if (isset($_POST['save_contract'])) {
	$numeroid = $_POST ['numeroid'];
	$metodo = $_POST ['metodo'];
	$pago = $_POST ['pago'];
	$clienteid = $_POST ['Id_comprador'];
	$viviendaid = $_POST ['Id_vivienda'];
	

	$query = "INSERT INTO contrato (id,pago,metodo,id_cliente,id_vivienda) VALUES ('$numeroid', '$pago', '$metodo','$clienteid','$viviendaid')";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");

	}


	$_SESSION ['message'] = 'Contrato guardado satisfactoriamente';
	$_SESSION ['message_type'] = 'success';

	header ("Location: carga.php");
	
}


?>

