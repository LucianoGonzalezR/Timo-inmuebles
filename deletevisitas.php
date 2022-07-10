<?php 
	
	include("Basededatos.php");

	if (isset($_GET['id'])){
		
		$id = $_GET['id'];
		$query = "DELETE FROM solicitud_de_visita WHERE id= $id";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			die("Query Failed");
		}


		$_SESSION ['message'] = 'Contrato eliminado exitosamente';
		$_SESSION ['message'] = 'danger';
		header("Location: visitas.php");

	}

?>