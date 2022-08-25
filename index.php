<!DOCTYPE html>
<html lang="en" >
<head>
    <title>CRM</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="content/css/index.css" th:href="@{/css/index.css}">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="content/img/usuario.png" th:src="@{/img/usuario.png}"/>
                </div>
                <form class="col-12"  method="POST" action="controllers/login.php" >
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Email" name="usuario"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Password" name="contrasena"/>
                    </div>
                    <div class="col-12 forgot form-control-sm text-left">
                        <a href="#">¿Olvidó su contraseña?</a>
                    </div>                
                    <button type="submit" class="btn btn-primary mb-1"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>                              
                    <p class="form-control-sm font-bold text-light">¿No tienes una cuenta? <a href="views/registro.php" class="link-danger" name="registro">Crear cuenta</a></p>                
                
                </form>
                
                <!--<div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Invalid username and password.
		        </div>
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            You have been logged out.
		        </div>-->
            </div>
        </div>
    </div>
</body>
</html>
