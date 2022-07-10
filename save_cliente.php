<?php 

include("Basededatos.php");


if (isset($_POST['save_cliente'])) {

	$dni = $_POST ['dni'];
	$nombre_y_apellido = $_POST ['nombreyapellido'];
	$telefono = $_POST ['telefono'];
	$direccion = $_POST ['direccion'];
	$mail = $_POST ['mail'];



	$query = "INSERT INTO cliente (dni,nombre_y_apellido,telefono,direccion,mail) VALUES ('$dni', '$nombre_y_apellido', '$telefono','$direccion','$mail')";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");

	}


	$_SESSION ['message'] = 'Contrato guardado satisfactoriamente';
	$_SESSION ['message_type'] = 'success';

	header ("Location: satisfactorio.php");
	
}


?>

