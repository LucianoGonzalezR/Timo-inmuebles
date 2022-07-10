<?php include('Basededatos.php');?>
<?php include('headerdosss.php');?>
	


	

	<main class="container p-4">
		
		<div class="row">

			

			<div class= "col-md-8"><h2>Informacion del inmueble:</h2><br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Id</th>
							<th>Direccion</th>
							<th>Metros cuadrados</th>
							<th>Ambiente</th>
							<th>Piso</th>
							<th>Garage</th>
							<th>Precio Aproximado</th>
							<th>Estado</th>
							<th>Georeferencia</th>
						</tr>
					</thead>
					<tbody>
						<?php

						if (isset($_GET['vivienda_id'])){
		
							$idviv = $_GET['vivienda_id'];
		

						}

							$query = "SELECT * FROM vivienda WHERE id='$idviv'";
							$result_contrato = mysqli_query($conn, $query) or die(mysqli_error($conn));

						while ($row = mysqli_fetch_assoc($result_contrato)  ) { ?>
							
								
						<tr> 
									
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['direccion']; ?></td>
							<td><?php echo $row['metros_cuadrados']; ?></td>
							<td><?php echo $row['ambientes']; ?></td>
							<td><?php echo $row['piso']; ?></td>
							<td><?php echo $row['garage']; ?></td>
							<td><?php echo $row['precio_estimativo']; ?></td>
							<td><?php echo $row['estado']; ?></td>
							<td><?php echo $row['georeferencia']; ?></td>
											
						</tr>
						<?php } ?>	
						
					</tbody>
				</table><br><br>
				<div class="card card-body">
					<a href="visitas.php" name="Ir a carga de viviendas" value="Cargar viviendas" class="btn btn-succes btn-block"> Volver a contratos </a>	
				</div>
			</div>

		</div>
		
	</main>
	
<?php include('footerdos.php');?>