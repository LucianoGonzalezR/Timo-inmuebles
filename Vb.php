<?php include('header.php');?>
<?php include('Basededatos.php');?>
<?php include('headerdo.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Villa Bosch, Tres de Febrero</h1>
			</div>

			<div class="articulo">
				<article>
					<h2>Mapa:</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13139.53692132705!2d-58.58847805613412!3d-34.58179577092848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb9b8f8d39399%3A0xaf05e58ee3f95a10!2sVilla%20Bosch%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1605365853112!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					
					<h2>______________________________________________________________________________</h2>
					<br/>

					<h2>Inmuebles disponibles:</h2>

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
							
							
							
							<th>Solicitar visita</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							$query = "SELECT * FROM vivienda WHERE id < '20000' AND id > '09999'";
							$result_visita = mysqli_query($conn, $query);

							while ($row = mysqli_fetch_assoc($result_visita) or die(mysqli_error($conn))   ){ ?>
								
								<tr>
									
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['direccion']; ?></td>
									<td><?php echo $row['metros_cuadrados']; ?></td>
									<td><?php echo $row['ambientes']; ?></td>
									<td><?php echo $row['piso']; ?></td>
									<td><?php echo $row['garage']; ?></td>
									
									
									
									<td>

             							<a href="reservasdos.php?id=<?php echo $row['id']?>" class="btn btn-success">
                							<i class="fas fa-angle-double-right"></i> Formulario
              							</a>
            						</td>
												
								</tr>
							
						<?php } ?>
					</tbody>
				</table>
			
		</div>
					<br/>
				</article>
			</div>
			<br/><br/>
			<?php include('sidebar.php');?>
		</div>
	</section>
	<br/><br/><br/><br/>
	<?php include('footer.php');?>
</body>
</html>
