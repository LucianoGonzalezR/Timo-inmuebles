<?php include('Basededatos.php');?>
<?php include('headerdos.php');?>
	<main class="container p-4">
		
		<div class="row">

			<div class= "col-md-4">

				
				<div class="card card-body">

					<form action="save_contract.php" method="POST">
						
						<div class="form-group">
							<input type="text" name="numeroid" class="form-control" placeholder="Escribir ID" autofocus>
						</div>
						<div class="form-group">
							<input type="text" name="pago" class="form-control" placeholder="Ingrese el monto" autofocus>
						</div>
						<div class= "form-group">
							<select name="metodo" class="form-control">
								<option value="transf banc">Transferencia bancaria</option>
								<option value="Cheque">Cheque</option>
								<option value="Efectivo Dolares">Efectivo Dolares</option>
								<option value="Credito Hipotecario">Credito Hipotecario</option>
							</select>
						</div>
						<div class= "form-group">
							<textarea name="Id_comprador" rows="2" class="form-control" placeholder="Id del comprador"></textarea>
						</div>
						<div class= "form-group">
							<textarea name="Id_vivienda" rows="2" class="form-control" placeholder="Id de la vivienda"></textarea>
						</div>
								
						<input type="submit" class="btn btn-succes btn-block" name="save_contract" value="Guardar contrato">
					</form>
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
             							<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
