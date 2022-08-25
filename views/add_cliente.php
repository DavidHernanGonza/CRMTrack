<?php
require_once("../models/lista_cliente.php");
$col1 = new consul();
$lad1 = $col1->lada();
$col2 = new consul();
$lad2 = $col2->lada();
$col3 = new consul();
$lad3 = $col3->lada();
$col4 = new consul();
$gen_sexo = $col4->sexo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente-Prospecto</title>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!--**BOOTSTRAP**-->


    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!---chosen-->
    <link rel="stylesheet" href="../content/css/chosen.css">
    <link rel="stylesheet" href="../content/css/ImageSelect.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../content/js/chosen.jquery.js"></script>
    <script src="../content/js/ImageSelect.jquery.js"></script>
    <style>
    body {
        font-family: 'Roboto Condensed', sans-serif;

    }

    .color_azul_suave {
        background-color: #D2F3F9;
    }

    #acabarOrden:hover {
        background-color: #18B8D1;
    }

    #acabarOrden {
        background-color: #47ddf5;
    }

    .color_azul {
        color: #18B8D1;
    }

    .border-bottom {
        border-bottom: 3px solid #dee2e6 !important;
    }

    .border-info {
        border-color: #18B8D1 !important;
        border-width: 2em;
    }

    .rol_icon {
        width: 50px;
        height: 50px;
        background-color: #D2F3F9;

    }

    .borde_campos {
        border-color: #18B8D1;
    }
    </style>
</head>

<body>
    <nav class="navbar border-bottom border-info mt-3 ">
        <h3>

            <small class="text-muted">Agregar Cliente-Prospecto</small>
            <p class="h4 color_azul">

            </p>
        </h3>

        <form class="form-inline">
            <a href="index.php" class="btn btn-warning mr-4"> <i class="fas fa-undo-alt"></i> Regresar</a>

        </form>
    </nav>
    <div>
        <h4><small class="text-muted ml-5">Datos Cliente</small></h4>
    </div>
    <div class="row mt-2 p-2  ">

        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Titulo:
            <input class="form-control form-control-sm borde_campos" type="text" id="titulo">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Nombre:
            <input class="form-control form-control-sm borde_campos" type="text" id="nombre">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Apellido:
            <input class="form-control form-control-sm borde_campos" type="text" id="apellido">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Correo:
            <input class="form-control form-control-sm borde_campos" type="text" id="correo">

        </div>



    </div>
    <div class="row mt-2 p-2  ">

        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Fecha de Nacimiento:
            <input class="form-control form-control-sm borde_campos" type="date" id="f_nacimiento">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Genero:
            <select class="form-control" id="genero">
                <?php foreach ($gen_sexo as $rowsexo) { ?>
                <option value="<?php echo $rowsexo['sexo']; ?>"> <?php echo $rowsexo['sexo']; ?></option>
                <?php } ?>
            </select>

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Dirección:
            <input class="form-control form-control-sm borde_campos" type="text" id="direccion">

        </div>
        <div class="col text-center col-sm-1"><span id="fechaIxT" style="color: red;"></span>N° Calle:
            <input class="form-control form-control-sm borde_campos" type="text" id="n_calle">

        </div>
        <div class="col text-center col-sm-1"><span id="fechaIxT" style="color: red;"></span>C.P:
            <input class="form-control form-control-sm borde_campos" type="text" id="c_p">

        </div>



    </div>
    <div class="row mt-2 p-2 ">


        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>País:
            <input class="form-control form-control-sm borde_campos" type="text" id="pais">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Región:

            <input class="form-control form-control-sm borde_campos" type="text" id="region">
        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Estado:

            <input class="form-control form-control-sm borde_campos" type="text" id="estado">
        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Cuidad:

            <input class="form-control form-control-sm borde_campos" type="text" id="ciudad">
        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Localidad:
            <input class="form-control form-control-sm borde_campos" type="text" id="localidad">

        </div>

    </div>
    <div class="row mt-2 p-2  border-bottom border-info">

        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Lada:

            <select class="my-select1 form-control" id="selec_lada1">

                <?php foreach ($lad1 as $rowlad1) { ?>
                <option data-img-src="../content/img/<?php echo $rowlad1['imagen']; ?>"
                    value="<?php echo $rowlad1['id']; ?>"> <?php echo $rowlad1['id']; ?></option>
                <?php } ?>
                <!--<option data-img-src="../content/img/mexico.png">Adnan Sagar</option>
                   <option selected="selected" data-img-src="img/rena.png">Rena Cugelman</option>
                   <option data-img-src="img/tavis.png">Tavis Lochhead</option>
                   <option data-img-src="img/brian.png">Brain Cugelman</option>-->
            </select>

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Num. Casa:
            <input class="form-control form-control-sm borde_campos" type="text" id="n_casa">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Lada:
            <select class="my-select2 form-control" id="selec_lada2">
                <?php foreach ($lad2 as $rowlad2) { ?>
                <option data-img-src="../content/img/<?php echo $rowlad2['imagen']; ?>"
                    value="<?php echo $rowlad2['id']; ?>"> <?php echo $rowlad2['id']; ?></option>
                <?php } ?>
            </select>

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Celular:

            <input class="form-control form-control-sm borde_campos" type="text" id="celular">
        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Fax:
            <input class="form-control form-control-sm borde_campos" type="text" id="fax">
        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Lada:
            <select class="my-select1 form-control" id="selec_lada3">
                <?php foreach ($lad3 as $rowlad3) { ?>
                <option data-img-src="../content/img/<?php echo $rowlad3['imagen']; ?>"
                    value="<?php echo $rowlad3['id']; ?>"> <?php echo $rowlad3['id']; ?></option>
                <?php } ?>
            </select>

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Otro Numero:

            <input class="form-control form-control-sm borde_campos" type="text" id="otro_num">
        </div>
    </div>
    <h4><small class="text-muted ml-5">Datos Empresa</small></h4>
    <div class="row mt-2 p-2 border-bottom border-info">

        <div class="col-sm-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class=" roundedv float-left m-2 text-center"><i class="fa fa-building fa-2x m-2"
                            style="color:#18B8D1;"></i></div>

                    <div class="m-3">
                        <div style="width: 300px; float: left;" id="usuario">
                            <span id="fechaIxT" style="color: red;">
                                <input class="form-control mr-sm-2 " type="text" placeholder="Empresa" id="empresa"
                                    style="border-color:#85C1E9;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class=" roundedv float-left m-2 text-center"><i class="fa fa-briefcase fa-2x m-2"
                            style="color:#18B8D1;"></i></div>

                    <div class="m-3">
                        <div style="width: 300px; float: left;" id="usuario">
                            <input class="form-control mr-sm-2 " type="text" placeholder="Departamento"
                                id="departamento" style="border-color:#85C1E9;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class=" roundedv float-left m-2 text-center"><i class="fa fa-users fa-2x m-2"
                            style="color:#18B8D1;"></i></div>

                    <div class="m-2">
                        <div style="width: 300px; float: left;" id="telefono">
                            <input class="form-control mr-sm-2 " type="text" placeholder="Agrupamiento" id="agrupacion"
                                style="border-color:#85C1E9;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4><small class="text-muted ml-5">Otros Datos </small></h4>
    <div class="row mt-2 p-2 ">
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Fuente Prospecto:
            <input class="form-control form-control-sm borde_campos" type="text" id="f_prospecto">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Estatus Prospecto:
            <input class="form-control form-control-sm borde_campos" type="text" id="estatus_prospecto">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Idioma Preferido:
            <input class="form-control form-control-sm borde_campos" type="text" id="idioma">

        </div>
        <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Metodo de Comunicación:
            <input class="form-control form-control-sm borde_campos" type="text" id="comunicacion">

        </div>

    </div>
    <div class="row mt-2 p-2 border-bottom border-info">


        <div class=" roundedv float-left m-1 text-center"><i class="fa fa-facebook fa-2x m-2"
                style="color:#18B8D1;"></i></div>

        <div class="m-1">
            <div style="width: 200px; float: left;" id="telefono">
                <input class="form-control mr-sm-1 " type="text" placeholder="" id="fb" style="border-color:#85C1E9;">
            </div>
        </div>

        <div class=" roundedv float-left m-1 text-center"><i class="fa fa-youtube-play fa-2x m-2"
                style="color:#18B8D1;"></i></div>

        <div class="m-1">
            <div style="width: 200px; float: left;" id="telefono">
                <input class="form-control mr-sm-1 " type="text" placeholder="" id="yt" style="border-color:#85C1E9;">
            </div>
        </div>
        <div class=" roundedv float-left m-1 text-center"><i class="fa fa-twitter fa-2x m-2" style="color:#18B8D1;"></i>
        </div>

        <div class="m-1">
            <div style="width: 200px; float: left;" id="telefono">
                <input class="form-control mr-sm-1 " type="text" placeholder="" id="tw" style="border-color:#85C1E9;">
            </div>
        </div>
        <div class=" roundedv float-left m-1 text-center"><i class="fa fa-linkedin fa-2x m-2"
                style="color:#18B8D1;"></i></div>

        <div class="m-1">
            <div style="width: 200px; float: left;" id="telefono">
                <input class="form-control mr-sm-1 " type="text" placeholder="" id="ln" style="border-color:#85C1E9;">
            </div>
        </div>
        <div class=" roundedv float-left m-1 text-center"><i class="fa fa-instagram fa-2x m-2"
                style="color:#18B8D1;"></i></div>

        <div class="m-1">
            <div style="width: 200px; float: left;" id="telefono">
                <input class="form-control mr-sm-1 " type="text" placeholder="" id="insta"
                    style="border-color:#85C1E9;">
            </div>
        </div>


    </div>

    <div id="tempo2"></div>

    <div class="row mt-3 p-2">
        <input type="hidden" id="accion" name="accion" value="agregarcliente">

        <div class="col text-left mt-4" style="width: 100px; " id="usuario">
            <button style="float: right;margin-left: 1em;" type="button" class="btn btn-danger btn-lg ml-3"
                value="modificarOrden" id="modificarOrden"><span class="fa fa-ban"></span> Cancelar</button>
            <button style="float: right;" type="button" class="btn btn-success btn-lg" value="agregarcliente"
                id="agregarcliente"><span class="fas fa-check-circle"></span> Guardar </button>

        </div>




    </div>
    <script>
    $(document).ready(function() {
        $(".my-select1").chosen();
        $(".my-select2").chosen();
        $(".my-select3").chosen();



    });
    </script>


    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="../content/js/function.js"></script>






</body>

</html>