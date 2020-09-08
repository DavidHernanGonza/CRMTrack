<?php
$id = $_GET['correo'];
$prod = $_GET['nombre'];
require_once("../models/acciones_clientes.php");

$col1= new consul();
$col2= new consul();
$col3= new consul();

$clientes= $col1->clientes_id($id);
$producto= $col2->selec_producto($prod);
$histo= $col3->historial($id, $prod);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../content/js/busqueda.js"></script>
        <!--**FIN BUSQUEDA EN TABLAS**-->		
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
		
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      
        
    <title>Historia-Cliente</title>
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
    .border-bottom {
    border-bottom: 3px solid #dee2e6!important;
}
    .border-info {
    border-color: #18B8D1!important;
   border-width: 2em;
}

.color_verde_icon  {
        color:#75BD6F;
        font-size:2em;

    }

    .img_piezas img {
    width: 60px;
    height: auto;
    margin: auto;
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
            <?php foreach($producto as $pro){?>
                Historial: <?php echo $pro ['nombre'];?>
                <?php } ?>
                <p class="h4 ">                            
                <?php foreach($clientes as $cli){?>
                        Cliente: <?php echo $cli ['nom_cliente']." ".$cli ['apellido'];?>
                        <input type="hidden" id="id_nomcliente" value="<?php echo $cli ['nom_cliente'];?>">
                        <input type="hidden" id="id_cliente" value="<?php echo $cli ['id_cliente'];?>">
                    <?php } ?>
                </p>
            </h3>
         
              <form class="form-inline">
              <a href="clientes.php" class="btn btn-warning"> <i class="fas fa-undo-alt"></i> Regresar</a>   
                <i class="fas fa-search p-2 fa-2x"></i>
                  <input class="form-control mr-sm-2 color_azul_suave" type="search" placeholder="Search" aria-label="Buscar">                  
              </form>                    
        </nav>

          <div>            
            <div class="row">
                <div class="col">
                    <p class="mt-2">Mostrar 10 registros </p>
     
            <table class="table">
              <thead class="color_azul text-white">
                <tr class="text-center">
                  <th scope="col">Seguimiento</th>
                  <th scope="col">Fecha Seguimiento</th>
                  <th scope="col">Tarea</th>
                  <th scope="col">Fecha Tarea</th>
                  <th scope="col">Comentario</th>
                </tr>
              </thead>
            
              <?php
                        foreach ($histo as $cols) { 
                          ?>
						 <tr class="text-center">
                           <td><?php echo $cols['icono_seg']." ".$cols['seguimineto']?></td>
                            <td><?php echo $cols['fechasegui']?></td>
                            <td><?php echo $cols['icono']." ".$cols['tarea']?></td>
                            <td><?php echo $cols['fechatarea']?></td>
                            <td><?php echo $cols['comentario']?></td>
                                                      
						 </tr>
						<?php }	?>
							

          </table>
          </div>
      </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <!-- <script src="../content/js/bootstrap.min.js"></script>-->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
	$(document).ready( function () {
   		 $('#mytable').DataTable({
				language:{
    			"sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
				}
			}
		});
	} );
	</script>
	<br>
</body>
</html>
