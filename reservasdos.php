<?php include('header.php');?>
<?php include('Basededatos.php');?>
<?php include('headerdo.php');?>

	<?php 
		if (isset($_GET['id'])) {
			$idviv = $_GET['id'];
		}
	?>

	<main class="container p-4">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Solicitud de visita</h1>
			</div>
		
		<h2>Complete el formulario:</h2>
		<h6>Si es la primera vez que solicita una visita complete los datos. Si ya realizo, no es necesario.</h6>
		<h6>El ID de su vivienda es: <?php echo $idviv;?>.</h6>
		<br>
		<div class="row">
	<div class= "col-md-4">

				
				<div class="card card-body">
					<form action="save_solicitud.php" method="POST">
						
						<div class="form-group"><h6>Fecha de la visita</h6>
							<input type="date" name="fecha" class="form-control" placeholder="Fecha" autofocus>
						</div>
						<div class="form-group"><h6>ID vivienda</h6>
							<input type="text" name="idviv" class="form-control"  placeholder="id vivienda (Indicado arriba)" autofocus>
						</div>
						<div class= "form-group"><h6>Nro. Documento</h6>
							<input type="text" name="cliente_dni" class="form-control" placeholder="DNI" autofocus>
						</div>
						<div class= "form-group"><h6>Telefono</h6>
							<input type="text" name="tel" class="form-control" placeholder="Telefono de contacto" autofocus>
						</div>
								
						<input type="submit" class="btn btn-succes btn-block" name="save_solicitud" value="Enviar informacion">
					</form>
					¿Nunca realizo visitas?<a href="reserva.php"class="btn btn-info">Clic aqui
						<i class="fas fa-angle-double-right"></i>
					</a>
					
				</div>
				
			</div>

		</div>
	</main>