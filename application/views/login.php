<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Login de usuario</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('scripts') ?>
</head>
</head>
<body class="bg-gray">
	<div id="login" class="center-block">
		<div class="container">
			<div id="login-row" class="row">
				<div id="login-column" class="col-md-6 col-md-offset-3">
					<div id="login-box" class="col-md-12">
						<form id="login-form" class="form" action="<?php echo base_url(); ?>index.php/login/iniciar_sesion" method="post">
							<h3 class="text-center">Inicio de sesión</h3>
							<?php if (isset($error)): ?>
								<div class="form-group alert alert-danger"> <?php echo $error ?> </div>
							<?php endif; ?>
							<div class="form-group">
								<label for="username">Usuario:</label><br>
								<input type="text" name="username" id="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Contraseña:</label><br>
								<input type="password" name="password" id="password" class="form-control">
							</div>
							<div class="form-group pull-right">
								<input type="submit" name="submit" class="btn btn-success btn-md" value="Acceder">
							</div>
						</form>
						<?php //echo openssl_encrypt("segui3nt021", ENCMETH, SECRETKEY, 0, ""); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>