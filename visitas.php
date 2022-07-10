<?php include('Basededatos.php');?>
<?php include('headerdosss.php');?>
	<main class="container p-4">
		
		<div class="row">

			

			<div class= "col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Fecha y hora</th>
							<th>Cliente DNI</th>
							
							<th>ID Vivienda</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = "SELECT * FROM solicitud_de_visita";
							$result_contrato = mysqli_query($conn, $query);

							while ($row = $result_contrato -> fetch_array()){ ?>
								
								<tr> 
									
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['fecha_y_hora']; ?></td>
									<td><?php echo $row['cliente_dni']; ?></td>
									
									<td><?php echo $row['vivienda_id']; ?></td>

									<td>
             							
              							<a href="vervivienda.php?vivienda_id=<?php echo $row['vivienda_id']?>"class="btn btn-success"> 
          									<i class="fas fa-home"></i> Ver Vivienda
              							</a>  
              							<a href="vercliente.php?cliente_dni=<?php echo $row['cliente_dni']?>"class="btn btn-info">  
              								<i class="far fa-user"></i> Ver Cliente
            							</a>  
            							<a href="deletevisitas.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                							<i class="far fa-trash-alt"></i> Eliminar
              							</a>
            						</td>
											
								</tr>
							
						<?php } ?>
					</tbody>
				</table>
			
			</div>
	</main>
		
<?php include('footerdos.php');?>
