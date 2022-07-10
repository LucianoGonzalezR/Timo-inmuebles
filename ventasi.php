<?php include('header.php');?>
<?php include('headerdo.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Departamento de ventas</h1>
			</div>

			<div class="articulo">
				<article>
					<h2>Porfavor, Ingrese su usuario.</h2>
					<img src="img/depto.jpg" width="960" height="540" />
					<form action="login_depto.php" method="GET">
						
						<div class="form-group">
							<input type="password" name="contraseña" class="form-control" placeholder="Contraseña" autofocus>
							<label>Contraseña incorrecta</label>
						</div>
								
						<input class="btn btn-primary" type="submit" name="login_depto" value="Ingresar">
					</form>
					<br/>
				</article>
			</div>

			
		</div>
	</section>
	<br/><br/><br/><br/>
	<?php include('footer.php');?>
</body>
</html>
