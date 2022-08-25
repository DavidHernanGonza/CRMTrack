<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        :root{
            --color-azul: #18B8D1;
        }
        body {
            font-family: 'Roboto Condensed', sans-serif;
            /*background: url(../content/img/fondo.jpg);*/
        }
        .borde_campos {
            border-color: var(--color-azul);
        }
    </style>
</head>
<body>
    <div class="card-body m-auto py-5 px-md-5">    
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 ">
                <h2 class="fw-bold mb-5">Regístrese ahora</h2>
                <form action="../controllers/login.php" method="POST">
                <!-- Diseño de cuadrícula de 2 columnas con entradas de texto para el nombre y apellidos -->
                    <div class="row">
                        <div class="col-sm-4 mb-4">
                            <div class="form-outline">
                                <input type="text" name="nombre" id="nombre" class="form-control borde_campos" required>
                                <label class="form-label" for="formNombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control borde_campos" required>
                                <label class="form-label" for="formApellidoP">Apellido Paterno</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control borde_campos" required>
                                <label class="form-label" for="formApellidoM">Apellido Materno</label>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4 row">
                        <div class="col-md-6 mb-4">  
                            <input type="email" name="correo" id="correo" class="form-control borde_campos" required>
                            <label class="form-label" for="formCorreo">Email </label>
                        </div> 
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="curp" id="curp" class="form-control borde_campos" required>
                                <label class="form-label" for="formApellido">CURP</label>
                            </div>
                        </div>                                
                    </div>
                    <!-- Contraseña input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="telefono" id="telefono" class="form-control borde_campos" required="">
                        <label class="form-label" for="formTelefono">Número de teléfono</label>
                    </div>
                    <!-- Bontón de envíar -->
                    <button type="submit" name="registrar" class="btn btn-primary btn-block mb-4">Únete</button>
                </form>
            </div>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>