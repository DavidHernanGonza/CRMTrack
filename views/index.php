<?php
require_once("../models/lista_cliente.php");

$col= new consul();
$datos_clientes = $col->lista_todos_datos();
$rol_info= new consul();
$rol_info2= new consul();
$rol_info3= new consul();
$rol_info4= new consul();
$rol_info5= new consul();
$rol_info6= new consul();

$rol2 = $rol_info2->seguimiento(); 
$rol3 = $rol_info3->status_cliente(); 
$roltar = $rol_info4->tarea(); 
$rolpro = $rol_info5-> producto(); 
$rolcli = $rol_info6-> clientes(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Lista-Prospecto</title>

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

    <!--**FIN BUSQUEDA EN TABLAS**-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
    body {
        font-family: 'Roboto Condensed', sans-serif;

    }

    .color_azul_suave {
        background-color: #D2F3F9;
    }

    .color_azul {
        background-color: #18B8D1;
    }

    .color_verde_icon {
        color: #75BD6F;
        font-size: 2em;

    }

    .color_azul_icon {
        color: #18B8D1;
        font-size: 2em;

    }

    .border-bottom {
        border-bottom: 3px solid #dee2e6 !important;
    }

    .border-info {
        border-color: #18B8D1 !important;
        border-width: 2em;
    }

    .img_piezas img {
        width: 60px;
        height: auto;
        margin: auto;
    }

    #mytable_previous,
    #mytable_next {
        color: white;
        cursor: pointer;
        padding: 10px;
        text-decoration: none;
    }

    #mytable_previous:hover,
    #mytable_next:hover {
        background-color: black;
    }

    #mytable_next {
        padding-left: 10px;
        margin-left: 10px;
    }

    #mytable_previous {
        margin-left: 10px;
    }

    #mytable_paginate span a {
        padding: 10px;
        color: white;
        cursor: pointer;
        text-decoration: none;
    }

    #mytable_paginate span a:hover {
        background-color: black;
    }

    .link_delete,
    .link_update:hover,
    .link_send_update:hover {
        cursor: pointer;
    }
    </style>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <?php include('menu.php');?>
    </nav>

    <div class="container-fluid mt-2 ">
        <nav class="navbar border-bottom border-info">
            <h3>
                Lista de Prospecto

            </h3>
        </nav>

        <div>
            <div class="row">

                <div class="col mt-3">
                    <div>
                        <form class="form-inline my-2 my-lg-0" style="float: left;" action="add_cliente.php"
                            method="POST" autocomplete="off">
                            <button style="float: right;" type="submit" class="btn btn-success"
                                value="Agregar Datos"><span class="fas fa-plus-circle"></span> Agregar Datos </button>
                        </form>
                        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalU" data-whatever="@mdo">Agregar</button>-->

                        <div class="text-center float-left" style="width:140px;">
                            <a href="#" data-toggle="modal" data-target="#instructivoModal"><i
                                    class="fas fa-book  fa-2x" aria-hidden="true"></i> <br>
                                <span style="font-size: 12px;">Cargar Archivo</span> </a>
                        </div>
                        <div class="text-center float-left" style="width:140px;">
                            <a href="#" data-toggle="modal" data-target="#cargarcontacto"><i class="fas fa-users  fa-2x"
                                    aria-hidden="true"></i> <br>
                                <span style="font-size: 12px;">Cargar Contacto</span> </a>
                        </div>
                    </div>




                    <!-- <p class="mt-2">Mostrar 10 registros </p> -->
                    <table id="mytable" class="table">
                        <thead class="color_azul text-white">
                            <tr class="text-center">

                                <th>Nombre</th>
                                <th scope="col">Seguimiento</th>
                                <th scope="col">Fecha Seguimiento</th>
                                <th scope="col">Hora Seguimiento</th>
                                <th scope="col">Tarea</th>
                                <th scope="col">Fecha Tarea</th>
                                <th scope="col">Hora Tarea</th>
                                <th scope="col">Status</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($datos_clientes as $cols) { 
                          ?>
                        <tr class="text-center">
                            <td><?php echo $cols['nom_cliente']." ".$cols['apellido']?></td>
                            <td>
                                <?php if($cols['id_seguimiento']==1){?>
                                <a href="tel:<?php echo $cols['celular']?>"><?php echo $cols['icono_seg']?></a>
                                <?php } if($cols['id_seguimiento']==2){?>
                                <a target="_blanck"
                                    href="https://api.whatsapp.com/send?phone=<?php echo $cols['celular']?>&text=hola,%20¿qué%20tal%20estás?"><?php echo $cols['icono_seg']?></a>
                                <?php }  if($cols['id_seguimiento']==3){?>
                                <a href="registro.php"><?php echo $cols['icono_seg']?></a>
                                <?php }  if($cols['id_seguimiento']==4){?>
                                <a href="pago.php?iddato"><?php echo $cols['icono_seg']?></a>
                                <?php }  if($cols['id_seguimiento']==5){?>
                                <a href="post-pago.php?iddato"><?php echo $cols['icono_seg']?></a>
                                <?php }  if($cols['id_seguimiento']==6){?>
                                <a href="referidos.php?iddato"><?php echo $cols['icono_seg']?></a>
                                <?php }  if($cols['id_seguimiento']==7){?>
                                <a href="mailto:<?php echo $cols['correo']?>"><?php echo $cols['icono_seg']?></a>

                                <?php }  if($cols['id_seguimiento']==8){?>
                                <?php echo $cols['icono_seg']?>
                                <?php }?>
                            </td>

                            <td><?php echo $cols['fecha_contacto']?></td>
                            <td><?php echo $cols['hora_seguimiento']?></td>
                            <td>
                                <?php if($cols['id_tarea']==1){?>
                                <a href="tel:<?php echo $cols['celular']?>"><?php echo $cols['icono']?></a>
                                <?php } if($cols['id_tarea']==2){?>
                                <a target="_blanck"
                                    href="https://api.whatsapp.com/send?phone=<?php echo $cols['celular']?>&text=hola,%20¿qué%20tal%20estás?"><?php echo $cols['icono']?></a>
                                <?php }  if($cols['id_tarea']==3){?>
                                <a href="registro.php?iddato=<?php echo $cols['id']?>"><?php echo $cols['icono']?></a>
                                <?php }  if($cols['id_tarea']==4){?>
                                <a href="pago.php?iddato=<?php echo $cols['id']?>"><?php echo $cols['icono']?></a>
                                <?php }  if($cols['id_tarea']==5){?>
                                <a href="post-pago.php?iddato=<?php echo $cols['id']?>"><?php echo $cols['icono']?></a>
                                <?php }  if($cols['id_tarea']==6){?>
                                <a href="referidos.php?iddato=<?php echo $cols['id']?>"><?php echo $cols['icono']?></a>
                                <?php }  if($cols['id_tarea']==7){?>
                                <a href="mailto:<?php echo $cols['correo']?>"><?php echo $cols['icono']?></a>
                                <?php }  if($cols['id_tarea']==9){?>
                                <?php echo $cols['icono']?>
                                <?php }?>
                            </td>

                            <td><?php echo $cols['fecha_seguimiento']?></td>
                            <td><?php echo $cols['hora_tarea']?></td>

                            <td>
                                <?php echo $cols['color_status']?>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-4 text-center float-left" style="width:60px; ">
                                        <a href="edita_prospecto.php?id=<?php echo $cols['id']?>"
                                            title="Editar datos"><i
                                                class="fas fa-pencil-alt fa-2x text-warning"></i></a>
                                    </div>
                                    <div class="col-sm-4 text-center float-left" style="width:60px; ">
                                        <a class="link_delete text-center"
                                            onclick="elimProspecto('<?php echo  $cols['id'];?>');"><i
                                                class="fas fa-trash-alt  fa-2x text-danger"></i></a>

                                    </div>
                                    <div class="col-sm-4 text-center float-left" style="width:60px; ">
                                        <a href="historial_prospecto.php?correo=<?php echo $cols['correo']?>"
                                            title="Historial"><i class="fas fa-history fa-2x text-primary"></i></a>
                                    </div>

                                </div>




                            </td>

                        </tr>
                        <?php }	?>
                    </table>
                    <tbody>
                </div>
            </div>
        </div>
    </div>
    <div id="tempo"></div>
    <!-- Modal ADD Instructivo -->
    <div class="modal fade" id="instructivoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cargar Archivo</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../controllers/subirArchivo.php" enctype="multipart/form-data" id="form_fileUp"
                        method="POST">
                        <input type="hidden" name="subirInstructivo">
                        <input class="form-control form-control-sm" type="file" name="file" id="file"
                            onchange="validaArchivo('file', 'instructivoModal', 'xlsx');">
                        <div class="w-100 text-right">
                            <button type="submit" id="submitFileInstr"
                                class="btn btn-primary mt-2 mb-2 mr-2 text-center">Cargar</button>
                        </div>

                    </form>
                    <!-- <div class='progress' id="progressDivId">
            <div class='progress-bar' id='progressBar'></div>
            <div class='percent' id='percent'>0%</div>
          </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ADD Instructivo -->

    <!-- Modal ADD Instructivo -->
    <div class="modal fade" id="cargarcontacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cargar Archivo de contacto</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../controllers/subirContacto.php" enctype="multipart/form-data"
                        id="form_fileUpcontacto" method="POST">
                        <input type="hidden" name="subirInstructivo">
                        <input class="form-control form-control-sm" type="file" name="file" id="file"
                            onchange="validaArchivo('file', 'cargarcontacto', 'xlsx');">
                        <div class="w-100 text-right">
                            <button type="submit" id="submitFileInstr1"
                                class="btn btn-primary mt-2 mb-2 mr-2 text-center">Cargar</button>
                        </div>

                    </form>
                    <!--  <div class='progress' id="progressDivId">
            <div class='progress-bar' id='progressBar'></div>
            <div class='percent' id='percent'>0%</div>
          </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ADD Instructivo -->






    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../content/js/fuciones_gene.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>





    <script type="text/javascript">
    $(document).ready(function() {

        $('#mytable').DataTable({
            language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla =(",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }
        });

        $("#mytable_filter").attr("class", "dataTables_filter form-inline p-2");
        $("#mytable_filter label input").attr("class", "ml-1 form-control mr-sm-2 color_azul_suave");
        $("#mytable_filter label input").attr("placeholder", "Buscar Prospecto");
        $("#mytable_length").attr("class", "dataTables_length form-inline");
        $("#mytable_length label select").attr("class",
            "ml-2 mr-2 form-control form-control-sm color_azul_suave borde_campos");

        $("#mytable_info").attr("class", "dataTables_info    text-black");

        $("#mytable_paginate").attr("class", "dataTables_paginate paging_simple_numbers  text-black");


    });
    </script>


</body>

</html>