<?php include('header.php');?>
<?php include('Basededatos.php');?>
<?php include('headerdo.php');?>

	
	<main class="container p-4">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Datos del Cliente</h1>
			</div>
		
		<h2>Complete el formulario:</h2>
		<h6>Si es la primera vez que solicita una visita complete los datos. Si ya realizo, no es necesario.</h6>
		<br>
		<div class="row">

			<div class= "col-md-4">

				
				<div class="card card-body">

					<form action="save_cliente.php" method="POST">
						
						<div class="form-group">
							<input type="text" name="dni" class="form-control" placeholder="DNI" autofocus>
						</div>
						<div class="form-group">
							<input type="text" name="nombreyapellido" class="form-control" placeholder="Nombre y apellido" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="telefono" class="form-control" placeholder="Telefono de contacto" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="direccion" class="form-control" placeholder="Direccion" autofocus>
						</div>
						<div class= "form-group">
							<input type="email" name="mail" class="form-control" placeholder="Correo electronico" autofocus>
						</div>
								
							<input type="submit" class="btn btn-succes btn-block" name="save_cliente" value="Enviar informacion">
						<br>
					</form>
					¿Ya realizo visitas?<a href="blog.php"class="btn btn-info">Clic aqui
						<i class="fas fa-angle-double-right"></i>
					</a>
					

				</div>
				
			</div>
			
		</div>
	</main>





