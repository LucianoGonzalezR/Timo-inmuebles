<?php include('header.php');?>
<?php include('headerdo.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Supervisor de ventas.</h1>
			</div>

			<div class="articulo">
				<article>
					<h2>  Porfavor, Ingrese su usuario.</h2><br/>
					<img src="img/wea.jpg" width="960" height="400" /><br/><br/>
					<form action="login_super.php" method="GET">
						
						<div class="form-group">
							<input type="password" name="contraseña" class="form-control" placeholder="Password" autofocus>
							<label>Contraseña incorrecta</label>
						</div>
								
						<input type="submit" class="btn btn-primary" name="login_super" value="Ingresar">
					</form>
				</article>
			</div>

			
		</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include('footer.php');?>
	