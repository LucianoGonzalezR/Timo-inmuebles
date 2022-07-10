<?php include('Basededatos.php');?>
<?php include('headerdoss.php');?>
	<main class="container p-4">
		
		<div class="row">
			<div class= "col-md-4">

				___________________________________________________
				<div class="card card-body">

					<a href="cargavivienda.php" name="Ir a carga de viviendas" value="Cargar viviendas" class="btn btn-succes btn-block"> Cargar viviendas
             		</a>



				</div><br>

				<div class="card card-body">
				
					<a href="mostrarquejas.php" name="Ir a carga de viviendas" value="Cargar viviendas" class="btn btn-succes btn-block"> Mostrar sugerencias de clientes
             		</a>

				</div>
			</div>
			

			<div class= "col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Pago</th>
							<th>Metodo de pago</th>
							<th>ID_Comprador</th>
							<th>ID_Vivienda</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody> 
						<h4>Contratos</h4> 
						<?php
							$query = "SELECT * FROM contrato";
							$result_contrato = mysqli_query($conn, $query);

							while ($row = $result_contrato -> fetch_array()){ ?>
								
								<tr>
									
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['pago']; ?></td>
									<td><?php echo $row['metodo']; ?></td>
									<td><?php echo $row['id_cliente']; ?></td>
									<td><?php echo $row['id_vivienda']; ?></td>
									<td>
             							<a href="deletesup.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
