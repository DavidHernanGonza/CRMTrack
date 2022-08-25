<?php
require_once("../models/acciones_clientes.php");
$cliente_p= new consul();
$pieza= $cliente_p->listado_cliente(); 
$col1= new consul();
$segui = $col1->seguimiento();
$col2= new consul();
$tarea = $col2-> tarea();

$col3= new consul();
$statuss = $col3->status_cliente()
?>
<!DOCTYPE html>
<head>

       <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       
	      <title>Datos de Catalogo de Clientes-Piezas</title>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
         
	<style>
		.content {
			margin-top: 80px;
		}
		.img_piezas img{
  	 width: 60px;
  	 height: auto;
   	margin: auto;
    }
    
    .modal{
    position:fixed;
    width:100%;
    height:100vn;
    background: rgba(0, 0, 0, 0.81);
    display: none;
}
.modal1{
    position:fixed;
    width:100%;
    height:100vn;
    background: rgba(0, 0, 0, 0.81);
    display: none;
}
.bodyModal{
  width: 100%;
  height: 100%;
  display: -webkit-inline-flex;
  display: -moz-inline-flex;
  display: -ms-inline-flex;
  display: -o-inline-flex;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  
}
.bodyModal1{
  width: 100%;
  height: 100%;
  display: -webkit-inline-flex;
  display: -moz-inline-flex;
  display: -ms-inline-flex;
  display: -o-inline-flex;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  
}
#form_asig_tarea{
  width: 820px;
  text-align: center;
  border: seagreen;
  background-color: #D6EAF8 ;
  border-radius: 0px 0px 2px 2px;

  
}
#form_asig_producto{
  width: 820px;
  text-align: center;
  border: seagreen;
  background-color: #D6EAF8 ;
  border-radius: 0px 0px 2px 2px;

  
}
.cabezamodal{
    height: 60px;
    margin-top: 6px;
    background-color: white;
    justify-content: center;
    border-radius: 2px 2px 0px 0px;
 }
 .cabezamodal i{
    margin-left: 10px;
    margin-top: 10px;
 }
 .cabezamodal1{
    height: 60px;
    margin-top: 6px;
    background-color: white;
    justify-content: center;
    border-radius: 2px 2px 0px 0px;
 }
 .cabezamodal1 i{
    margin-left: 10px;
    margin-top: 10px;
 }
    

	</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
		<?php include('menu.php');?>
    </nav>

	<div class="containers" style="margin:20px">
		<div class="content">
			<h2>Lista Cliente agregados</h2>
			<hr>
			
			<div class="table-responsive">
			<table id="tablelol" class="table table-hover">
    		  <thead class="thead-light">
				<tr>
                    <th>id</th>
                    <th>Nombre</th>
					<th>Apellido</th>
                    <th>Empresa</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
										
				</tr>
        </thead>
        <?php
              foreach ($pieza as $row) { 
	      ?>
						<tr>
              				<td><?php echo $row['id_cliente'];?></td>
							<td><?php echo $row['nom_cliente'];?></td>
							<td><?php echo $row['apellido'];?></td>
                            <td><?php echo $row['empresa'];?></td>
                            <td><?php echo $row['correo'];?></td>
                            <td><?php echo $row['celular'];?></td>
                            <td>
                            <div class="text-center mx-auto" style="width:200px; ">
                                <a href="#" class="alt_tarea" correo="<?php echo $row['correo'];?>" ><i class="fa fa-pencil-square-o fa-2x  text-green" aria-hidden="true"></i></a>
                                <a href="#" class="alt_producto" correo="<?php echo $row['correo'];?>" ><i class="fas fa-suitcase fa-2x  text-success" aria-hidden="true"></i></a>
                                <a href="#" class="alt_tareaa" correo="<?php echo $row['correo'];?>" ><i class="fas fa-pencil-alt fa-2x text-warning" aria-hidden="true"></i></a>
                                <a href="#" class="alt_tareaa" correo="<?php echo $row['correo'];?>" ><i class="fas fa-trash-alt  fa-2x text-danger" aria-hidden="true"></i></a>
                             </div>                                            
                           </td>
            <?php }?>
			</table>
			</div>
		</div>
	</div>
    <div class="modal1">
    <div class="bodyModal1">
    <div class="">
            <div class="cabezamodal1">
            
                <div class="row">
                    <div class="col-md-11">
                    <i class="fa fa-pencil-square-o fa-2x" style="color:#85C1E9" aria-hidden="true">Agregar Tarea Cliente</i>
                    </div>
                    
                    <div class="col-md-1">
                    <a href=""  onclick="coseModal()"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
     <form action="" method="post" name="form_asig_producto" id="form_asig_producto" onsubmit="event1.preventDefault(); sendDataTarea();">
     <br>
     <div class="row" style=" margin-right: 5px;   margin-left: 5px;">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="nombre1" name="nombre1" value="">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="apellido1" name="apellido1" value="">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="correo1" name="correo1" value="">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="telefono1" name="telefono1" value="">
     
     </div>
     <br>
   
     <button type="submit"  class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> guardar</button>
     <a href="" class="btn btn-danger " onclick="coseModal()">cancelar</a>
     <br><br>
    </form>
    </div>
    
    </div>
    </div>

    <div class="modal">
    <div class="bodyModal">
    <div class="">
            <div class="cabezamodal">
            
                <div class="row">
                    <div class="col-md-11">
                    <i class="fa fa-pencil-square-o fa-2x" style="color:#85C1E9" aria-hidden="true">Agregar Tarea Cliente</i>
                    </div>
                    
                    <div class="col-md-1">
                    <a href=""  onclick="coseModal()"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
     <form action="" method="post" name="form_asig_tarea" id="form_asig_tarea" onsubmit="event.preventDefault(); sendDataTarea();">
     <br>
     <div class="row" style=" margin-right: 5px;   margin-left: 5px;">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="nombre" name="nombre" value="">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="apellido" name="apellido" value="">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="correo" name="correo" value="">
     <input  class="form-control form-control-sm borde_campos" type="hidden" id="telefono" name="telefono" value="">
     
                <div class="col-md-4">
                <label class="col control-label text-left"for="">Seleccione Tarea</label>
                <select class="form-control form-control-sm borde_campos" name="tarea" id="tarea">
                <?php foreach($tarea as $rowtar){?>
                               <option value="<?php echo $rowtar['nom_tarea']; ?>"><?php echo $rowtar['nom_tarea']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div class="col-md-4">
                <label class="col control-label text-left" for="">Seleccione Fecha</label>
                <input class="form-control form-control-sm borde_campos" type="date" id="fecha_tarea" name="fecha_tarea" value="">
                </div>
                <div class="col-md-4">
                <label class="col control-label text-left" for="">Seleccione Hora</label>
                <input class="form-control form-control-sm borde_campos" type="time" id="hora_tarea" name="hora_tarea" value="">
                </div>
     
     </div>
     <br>
     <div class="row" style=" margin-right: 5px;   margin-left: 5px;">
                <div class="col-md-4">
                <label class="col control-label text-left"for="">Seleccione Seguimiento</label>
                <select class="form-control form-control-sm borde_campos" name="seguimiento" id="seguimiento">
                <?php foreach($segui as $rowseg){  ?>
                          <option value="<?php echo $rowseg['nom_seguimiento']; ?>"><?php echo $rowseg['nom_seguimiento']; ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-4">
                <label class="col control-label text-left" for="">Fecha Seguimiento</label>
                <input class="form-control form-control-sm borde_campos" type="date" id="fecha_seguimiento" name="fecha_seguimiento" value="">
                </div>
                <div class="col-md-4">
                <label class="col control-label text-left" for="">Hora Seguimiento</label>
                <input class="form-control form-control-sm borde_campos" type="time" id="hora_seguimiento" name="hora_seguimiento" value="">
                </div>
     
     </div>
     <br>
     <div class="row" style=" margin-right: 5px;   margin-left: 5px;">
                <div class="col-md-4">
                <label class="col control-label text-left"for="">Seleccione Status</label>
                <select class="form-control form-control-sm borde_campos" name="estatus" id="estatus">
               
                        <?php  foreach($statuss as $rowseg){?>
                            <option value="<?php echo $rowseg['nom_status']; ?>"><?php echo $rowseg['nom_status']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="col-md-4">
                <label class="col control-label text-left" for="">Fuente Contacto</label>
                <input class="form-control form-control-sm borde_campos" type="text"  name="fuentecontacto" id="fuentecontacto" value="">
                </div>
                <div class="col-md-4">
                <label class="col control-label text-left" for="">Comentario</label>
                <input class="form-control form-control-sm borde_campos" type="text"  name="comentario" id="comentario"value="">
                </div>
     
     </div>
                <br>
     <button type="submit"  class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> guardar</button>
     <a href="" class="btn btn-danger " onclick="coseModal()">cancelar</a>
     <br><br>
    </form>
    </div>
    
    </div>
    </div>

  
    <div id="tempo3"></div>

    <!--modal producto-->
 

    <script>
    $(document).ready(function(){
        $('.alt_tarea').click(function(e){
            e.preventDefault();
            var correous =$(this).attr('correo');
            var action = 'infoProducto';
           
            $.ajax({
                url:'../models/asigtarea.php',
                type:'POST',
                async:true,
                data: {action:action,correous:correous},

                success: function(response){
                    console.log(response);
                    if(response!='error'){
                        var info = JSON.parse(response);
                        console.log(info);
                        $('#nombre').val(info.nom_cliente);
                        $('#apellido').val(info.apellido);
                        $('#correo').val(info.correo);
                        $('#telefono').val(info.celular);
                    }
                },
                error: function(error){
                    console.log(error);

                }
            
            });
           $('.modal').fadeIn();
        });
    });
    
    </script>
     <script>
    $(document).ready(function(){
        $('.alt_producto').click(function(e){
            alert("entra")
           // e.preventDefault();
           /* var correous =$(this).attr('correo');
            var action = 'asigProducto';
           
           /* $.ajax({
                url:'../models/asigProducto.php',
                type:'POST',
                async:true,
                data: {action:action,correous:correous},

                success: function(response){
                    console.log(response);
                    if(response!='error'){
                        var info = JSON.parse(response);
                        console.log(info);
                        $('#nombre1').val(info.nom_cliente);
                        $('#apellido1').val(info.apellido);
                        $('#correo1').val(info.correo);
                        $('#telefono1').val(info.celular);
                    }
                },
                error: function(error){
                    console.log(error);

                }
            
            });*/
           $('.modal1').fadeIn();
        });
    });
    
    </script>

    <script>
    function closeModal(){
        $('fecha_seguimiento').val('');
        $('.modal').fadeOut();
      
    }
    </script>
    <script>
    function sendDataTarea(){
       
        if($('#tarea').val()!=""  && $('#fecha_tarea').val()!="" && $('#hora_tarea').val()!="" && $('#seguimiento').val()!="" 
        && $('#fecha_seguimiento').val()!="" && $('#hora_seguimiento').val()!="" 
        && $('#estatus').val()!="" && $('#fuentecontacto').val()!="" &&
        $('#comentario').val()!=""){
        
        
       
            $.ajax({
                type:"POST",
                url:"../models/adinarTarea.php",
                data: "correo=" + $('#correo').val() + "&nombre=" + $('#nombre').val() + "&apellido=" + 
                $('#apellido').val() + "&telefono=" + $('#telefono').val() + "&tarea=" + $('#tarea').val() +
                "&fecha_tarea=" + $('#fecha_tarea').val() + "&hora_tarea=" + $('#hora_tarea').val() +
                "&seguimiento=" + $('#seguimiento').val() + "&fecha_seguimiento=" + $('#fecha_seguimiento').val() +
                "&hora_seguimiento=" + $('#hora_seguimiento').val() + "&estatus=" + $('#estatus').val() +
                "&fuentecontacto=" + $('#fuentecontacto').val() + "&comentario=" + $('#comentario').val() ,
                success:function(r){
                $("#tempo3").html(r);
            }
            });
        }
        else{
            alert("Por favor, rellene todos campos");
        
        }
    }
    </script>
    
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	
	<!--<script type="text/javascript" src="../content/js/jquery.min.js"></script>-->
   <!-- <script src="../content/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
	$(document).ready( function () {
   		 $('#tablelol').DataTable({
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