<?php include('header.php');?>
<?php include('Basededatos.php');?>
<?php include('headerdo.php');?>

	
	<main class="container p-4">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Sugerencias</h1>
			</div>
		
		<h2>Complete el formulario:</h2>
		<h6>Si quiere realizar una sugerencia, consulta, necesita comentar algo indiquelo aqui abajo.</h6>
		<br>
		<div class="row">

			<div class= "col-md-4">

				
				<div class="card card-body">

					<form action="save_quejas.php" method="POST">
						
						<div class="form-group">
							<input type="text" name="cliente_dni" class="form-control" placeholder="DNI" autofocus>
						</div>
						<div class= "form-group">
							<select name="tipo" class="form-control">
								<option value="Mala atencion">Mala atencion</option>
								<option value="Mal manejo de la operacion">Mal manejo de la operacion</option>
								<option value="Pagina web">Pagina web</option>
								<option value="Turnos">Turnos</option>
								<option value="Otros">Otro</option>
							</select>
						</div>
						<div class= "form-group">
							<textarea type="text" name="descripcion" class="form-control" placeholder="Descripcion" ></textarea> 
						</div>
						
								
							<input type="submit" class="btn btn-succes btn-block" name="save_quejas" value="Enviar informacion">
						<br>
					</form>
					
					

				</div>
				
			</div>
			
		</div>
	</main>

