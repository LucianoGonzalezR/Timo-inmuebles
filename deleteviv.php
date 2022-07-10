<?php 
	
	include("Basededatos.php");

	if (isset($_GET['id'])){
		
		$id = $_GET['id'];
		$query = "DELETE FROM vivienda WHERE id= $id";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			die("Query Failed");
		}


		$_SESSION ['message'] = 'vivienda eliminada exitosamente';
		$_SESSION ['message'] = 'danger';
		header("Location: cargavivienda.php");

	}

?>