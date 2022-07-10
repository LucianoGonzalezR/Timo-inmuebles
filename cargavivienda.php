<?php include('Basededatos.php');?>
<?php include('headerdoss.php');?>
	<main class="container p-4">
		
		<div class="row">

			<div class= "col-md-4">

				
				<div class="card card-body"> 

					<form action="save_vivienda.php" method="POST">
						
						<div class="form-group">
							<input type="text" name="numeroid" class="form-control" placeholder="Escribir ID" autofocus>
						</div>
						<div class="form-group">
							<input type="text" name="direccion" class="form-control" placeholder="Direccion" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="metros_cuadrados" class="form-control" placeholder="metros cuadrados" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="ambiente" class="form-control" placeholder="ambiente/s" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="piso" class="form-control" placeholder="piso" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="garage" class="form-control" placeholder="garage(autos)" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="precio_estimativo" class="form-control" placeholder="precio aproximado" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="estado" class="form-control" placeholder="estado de la vivienda" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="propietario" class="form-control" placeholder="DNI propietario" autofocus>
						</div>
						<div class= "form-group">
							<input type="text" name="georeferencia" class="form-control" placeholder="Georeferencia" autofocus>
						</div>
								
						<input type="submit" class="btn btn-succes btn-block" name="save_vivienda" value="Cargar">
					</form>
					
				</div><br>
				<div class="card card-body"> 

					<a href="consulta.php" name="Ir a carga de viviendas" value="Cargar viviendas" class="btn btn-succes btn-block"> Volver a contratos
             		</a>

				</div>
				
			</div>

			<div class= "col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Direccion</th>
							<th>Mts. cuadrados</th>
							<th>Ambiente/s</th>
							<th>Piso</th>
							<th>Garages</th>
							<th>Precio aproximado</th>
							<th>DNI Propietario</th>
							<th>Estado</th>
							<th>Georeferencia</th>
							<th>Acciones</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							$query = "SELECT * FROM vivienda";
							$result_visita = mysqli_query($conn, $query);

							while ($row = mysqli_fetch_assoc($result_visita) or die(mysqli_error($conn))   ){ ?>
								
								<tr>
									
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['direccion']; ?></td>
									<td><?php echo $row['metros_cuadrados']; ?></td>
									<td><?php echo $row['ambientes']; ?></td>
									<td><?php echo $row['piso']; ?></td>
									<td><?php echo $row['garage']; ?></td>
									<td><?php echo $row['precio_estimativo']; ?></td>
									<td><?php echo $row['cliente_dni']; ?></td>
									<td><?php echo $row['estado']; ?></td>
									<td><?php echo $row['georeferencia']; ?></td>
									<td>
             							<a href="deleteviv.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                							<i class="far fa-trash-alt"></i>
              							</a>
            						</td>
												
								</tr>
							
						<?php } ?>
					</tbody>
				</table>
			
		</div>
	</main>
		
<?php include('footerdos.php');?>
