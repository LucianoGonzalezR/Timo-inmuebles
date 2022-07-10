<?php include('header.php');?>
<?php include('headerdo.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Vendedores</h1>
			</div>

			<div class="articulo">
				<article>
					<h2>  Porfavor, Ingrese su usuario de personal:</h2><br/>
					<img src="img/wea.jpg" width="960" height="400" /><br/><br/>
					<form action="login_personal.php" method="GET">
						
						<div class="form-group">
							<input type="password" name="contraseña" class="form-control" placeholder="Password" autofocus>
							<label>Contraseña incorrecta</label>
						</div>
								
						<input type="submit" class="btn btn-primary" name="login_personal" value="Ingresar">
					</form>
				</article>
			</div>

			
		</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<?php include('footer.php');?>
</body>
</html>
