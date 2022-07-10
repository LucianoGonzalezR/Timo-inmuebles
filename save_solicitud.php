<?php 

include("Basededatos.php");


if (isset($_POST['save_solicitud'])) {

	$fecha = $_POST ['fecha'];
	$idvivienda = $_POST ['idviv'];
	$dni = $_POST ['cliente_dni'];
	$telefono = $_POST ['tel'];

	echo $fecha;

	$query = "INSERT INTO solicitud_de_visita (id,fecha_y_hora,id_cliente,vivienda_id,cliente_dni,vendedor_id) 
	VALUES (NULL,'$fecha','$telefono', '$idvivienda', '$dni',NULL)";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");

	}


	$_SESSION ['message'] = 'Contrato guardado satisfactoriamente';
	$_SESSION ['message_type'] = 'success';

	header ("Location: satisfactoriodos.php");
	
}


?>