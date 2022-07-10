<?php include('Basededatos.php');?>
<?php include('headerdosss.php');?>
	


	

	<main class="container p-4">
		
		<div class="row">
			
			

			<div class= "col-md-8"><br>
             		<h2>Informacion del cliente:</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>DNI</th>
							<th>Nombre y apellido</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Mail</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if (isset($_GET['cliente_dni'])){
		
								$cliente_dni = $_GET['cliente_dni'];
		

							}
							$query = "SELECT * FROM cliente WHERE dni= '$cliente_dni'";
							$result_contrato = mysqli_query($conn, $query) or die(mysqli_error($conn));
							if (!$result_contrato) {
								die("Query Failed");
							}
							while ($row = mysqli_fetch_assoc($result_contrato)    ){ ?>
							
								
						<tr> 
									
							<td><?php echo $row['dni']; ?></td>
							<td><?php echo $row['nombre_y_apellido']; ?></td>
							<td><?php echo $row['telefono']; ?></td>
							<td><?php echo $row['direccion']; ?></td>
							<td><?php echo $row['mail']; ?></td>
							
											
						</tr>
						<?php } ?>	
						
					</tbody>
				</table><br><br>
				<div class="card card-body">
					<a href="mostrarquejas.php" name="Ir a carga de viviendas" value="Cargar viviendas" class="btn btn-succes btn-block"> Volver a sugerencias </a>	
				</div>
			</div>

		</div>
		
	</main>
	
<?php include('footerdos.php');?>