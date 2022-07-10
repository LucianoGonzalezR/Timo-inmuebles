<?php include('header.php');?>
<?php include('Basededatos.php');?>
<?php include('headerdo.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Martin Coronado, Tres de Febrero</h1>
			</div>

			<div class="articulo">
				<article>
					<h2>Mapa:</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13138.816193801467!2d-58.60055755613246!3d-34.5863543218786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb9a5a147c5a3%3A0xe6a621650b86b1c!2sMart%C3%ADn%20Coronado%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1605365063037!5m2!1ses!2sar" width="500" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 

					<h2>______________________________________________________________________________</h2>
					<br/>
					
					<h2>Inmuebles disponibles:</h2>

					
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
							$query = "SELECT * FROM vivienda WHERE id < '10000' AND id > '0'";
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
