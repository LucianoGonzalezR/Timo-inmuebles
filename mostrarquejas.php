<?php include('Basededatos.php');?>
<?php include('headerdoss.php');?>
	<main class="container p-4">
		
		<div class="row">
			
			

			<div class= "col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>DNI</th>
							<th>Tipo</th>
							<th>Descripcion</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody> 
						<h4>Sugerencias</h4> 
						<?php
							$query = "SELECT * FROM sugerencia";
							$result_contrato = mysqli_query($conn, $query);

							while ($row = $result_contrato -> fetch_array()){ ?>
								
								<tr>
									
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['cliente_dni']; ?></td>
									<td><?php echo $row['tipo']; ?></td>
									<td><?php echo $row['descripcion']; ?></td>
									<td>
             							<a href="deletequeja.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                							<i class="far fa-trash-alt"></i> Eliminar
              							</a>
              							 <a href="verclientee.php?cliente_dni=<?php echo $row['cliente_dni']?>"class="btn btn-info">  
              								<i class="far fa-user"></i>  Ver Cliente
            							</a>  
            						</td>
												
								</tr>
							
						<?php } ?>
					</tbody>
				</table>
			
			</div>
	</main>
		
<?php include('footerdos.php');?>
