<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cambiar Contraseña</title>
		
		<link rel="stylesheet" href="../content/css/bootstrap/bootstrap.min.css" >
		<link rel="stylesheet" href="../content/css/bootstrap/bootstrap-theme.min.css" >
		
		
		
	</head>
	
	<body>
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-primary" >
					<div class="panel-heading">
						<div class="panel-title">Restablecer Contraseña</div>

					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="../controllers/cambiarPassword.php" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>                                        
							</div>

                            <div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="password" class="form-control" name="NuevoPassword" placeholder="Nueva Contraseña" required>                                        
							</div>

                            <div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="password" class="form-control" name="PasswordRectificado" placeholder="Vuelva a escribir la contraseña" required>                                        
							</div>
							
							<div style="margin-top:10px" class="form-group text-center">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Enviar</a>
								</div>
							</div>
							  
						</form>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>