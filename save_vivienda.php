<?php 

include("Basededatos.php");


if (isset($_POST['save_vivienda'])) {
	$numeroid = $_POST ['numeroid'];
	$metros_cuadrados = $_POST ['metros_cuadrados'];
	$direccion = $_POST ['direccion'];
	$ambientes = $_POST ['ambiente'];
	$garage = $_POST ['garage'];
	$precioaproximado = $_POST ['precio_estimativo'];
	$dnipropietario = $_POST ['propietario'];
	$estado = $_POST ['estado'];
	$piso = $_POST ['piso'];
	$georeferencia = $_POST ['georeferencia'];
	

	$query = "INSERT INTO vivienda (id,direccion,metros_cuadrados,ambientes,piso,garage, precio_estimativo,estado,cliente_dni,georeferencia) VALUES ('$numeroid','$direccion', '$metros_cuadrados', '$ambientes','$piso','$garage','$precioaproximado','$estado', NULL,'$georeferencia')";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");

	}


	$_SESSION ['message'] = 'Contrato guardado satisfactoriamente';
	$_SESSION ['message_type'] = 'success';

	header ("Location: cargavivienda.php");
	
}


?>
