<?php 
$id = $_GET['id'];

require_once("../models/acciones_clientes.php");
$col0= new consul();
$datos = $col0->datos_genes2($id);
$col1= new consul();
$segui = $col1->seguimiento();
$col2= new consul();
$tarea = $col2-> tarea();

$col3= new consul();
$statuss = $col3->status_cliente()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prospecto</title>
     <!--BOOTSTRAP-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
       

        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     body {
        font-family: 'Roboto Condensed', sans-serif;

    }
    .color_azul_suave {
        background-color: #D2F3F9;
    }
    #acabarOrden:hover{
      background-color: #18B8D1;
    }
    #acabarOrden{
      background-color: #47ddf5;
    }
    .color_azul {
        color: #18B8D1;
    }
    .border-bottom {
    border-bottom: 3px solid #dee2e6!important;
}
    .border-info {
    border-color: #18B8D1!important;
   border-width: 2em;
}
    .rol_icon{
        width:50px;
        height: 50px;
        background-color: #D2F3F9;

    }

    .borde_campos {
        border-color:#18B8D1;
    }
    </style>
</head>
<body>
<?php foreach($datos as $data){?>
<nav class="navbar border-bottom border-info mt-3 ">
                <h3>
                    
                    <small class="text-muted">Modificar datos</small>
		    <p class="h4 color_azul">
            
		    Cliente: <?php echo $data ['nom_cliente']." ".$data ['apellido'];?>
            
            <input type="hidden" id="id_pro" value="<?php echo $data ['id'];?>">
           </p>
                </h3> 
                

                <form class="form-inline">
                <a href="index.php" class="btn btn-warning mr-4"> <i class="fas fa-undo-alt"></i> Regresar</a> 
            
                  
                </form>
            </nav>
            
            <div class="row mt-5 p-2  border-info">
                <div class="col-sm-5 mb-2">
                  <div class="card">
                    <div class="card-body">
                        <div class=" roundedv float-left m-2 text-center"><i class="fas fa-user fa-2x m-2" style="color:#18B8D1;"></i></div>
                     
                        <div class="m-3">
                            <div style="width: 200px; float: left;" id="usuario6">
                            <input class="form-control mr-sm-1  " type="text" placeholder="" aria-label="Buscar"  id="usuario" value="<?php echo $data ['nom_cliente'];?>" style="border-color:#85C1E9;">
                             </div>
                             <div style="width: 200px; float: left;" id="usuario5">
                            <input class="form-control mr-sm-1 ml-2" type="text" placeholder="" aria-label="Buscar"  id="apellido" value="<?php echo $data ['apellido'];?>" style="border-color:#85C1E9;">
                             </div>
                        </div>                     
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 mb-2">
                  <div class="card">
                    <div class="card-body">
                        <div class=" roundedv float-left m-2 text-center"><i class="fa fa-phone fa-2x m-2" style="color:#18B8D1;"></i></div>
                        
                        <div class="m-2">
                            <div style="width: 200px; float: left;" id="telefono1">
                            <input class="form-control mr-sm-1 " type="text" placeholder="" aria-label="Buscar"  id="telefono" value="<?php echo $data ['celular'];?>" style="border-color:#85C1E9;">
                             </div>
                        </div>                     
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 mb-2">
                  <div class="card">
                    <div class="card-body">
                        <div class=" roundedv float-left m-2 text-center"><i class="fa fa-envelope fa-2x m-2" style="color:#18B8D1;"></i></div>
                      
                        <div class="m-2">
                            <div style="width: 300px; float: left;" id="correo1">
                            <input class="form-control mr-sm-2 " type="text" placeholder="" aria-label="Buscar"  id="correo" value="<?php echo $data ['correo'];?>" style="border-color:#85C1E9;">
                             </div>
                        </div>                     
                    </div>
                  </div>
                </div>
    
                </div>
               
                <div class="row mt-3 p-2">
               
                    <div class="col-md-2 text-center">
                    <span id="fechaIxT" style="color: red;"></span>Seguimiento: 
                            <select class="form-control form-control-sm borde_campos" name="seguimiento" id="seguimiento">
                            <?php 
                            foreach($segui as $rowseg){
                                if($rowseg['nom_seguimiento'] == $data['seguimiento']){
                            ?>
                                    <option value="<?php echo $rowseg['nom_seguimiento']; ?>" selected><?php echo $data['seguimiento']; ?></option>
                            <?php 
                            }else{
                            ?>
                                    <option value="<?php echo $rowseg['nom_seguimiento']; ?>"><?php echo $rowseg['nom_seguimiento']; ?></option>
                            <?php 
                            }
                            } 
                            ?>
                        </select>
                    </div>


                    <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Fecha Seguimiento: 
                        <input class="form-control form-control-sm borde_campos" type="date" id="fecha_seguimiento" name="fecha_seguimiento" value="<?php echo $data ['fecha_seguimiento'];?>">
            
                    </div>

                    <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Hora Seguimiento: 
                        <input class="form-control form-control-sm borde_campos" type="time" id="hora_seguimiento" name="hora_seguimiento" value="<?php echo $data ['hora_seguimeinto'];?>">
            
                    </div>

                    <div class="col-md-2 text-center">
                        <span id="fechaIxT" style="color: red;"></span>Tarea: 
                            <select class="form-control form-control-sm borde_campos" name="tarea" id="tarea">
                            <?php 
                            foreach($tarea as $rowtar){
                                if($rowtar['nom_tarea'] == $data['tarea']){
                            ?>
                                    <option value="<?php echo $rowtar['nom_tarea']; ?>" selected><?php echo $data['tarea']; ?></option>
                            <?php 
                            }else{
                            ?>
                                    <option value="<?php echo $rowtar['nom_tarea']; ?>"><?php echo $rowtar['nom_tarea']; ?></option>
                            <?php 
                            }
                            } 
                            ?>
                        </select>
                   </div>
                    
                    <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Fecha Tarea: 
                        <input class="form-control form-control-sm borde_campos" type="date" id="fecha_tarea" name="fecha_tarea" value="<?php echo $data ['fecha_contacto'];?>">
            
                    </div>
                    <div class="col text-center"><span id="fechaIxT" style="color: red;"></span>Hora Tarea: 
                        <input class="form-control form-control-sm borde_campos" type="time" id="hora_tarea" name="hora_tarea" value="<?php echo $data ['hora_tarea'];?>">
            
                    </div>
                    
                </div>

                
                <div class="row mt-3 p-2">
                           
                    <div class="col-md-3 text-center">
                    <span id="fechaIxT" style="color: red;"></span>Status: 
                        <select class="form-control form-control-sm borde_campos" name="estatus" id="estatus">
                        <?php 
                        foreach($statuss as $rowsta){
                            if($rowsta['nom_status'] == $data['statuss']){
                        ?>
                                <option value="<?php echo $rowsta['nom_status']; ?>" selected><?php echo $data['statuss']; ?></option>
                        <?php 
                        }else{
                        ?>
                                <option value="<?php echo $rowsta['nom_status']; ?>"><?php echo $rowsta['nom_status']; ?></option>
                        <?php 
                        }
                        } 
                        ?>
                    </select>
                </div>
                             <div class="col text-center" style="width: 300px; " id="usuario1"><span id="fechaIxT" style="color: red;"></span>Fuente Contacto:
                            <input class="form-control mr-sm-3 " type="text" placeholder="" aria-label="Buscar"  name="fuente_contacto" id="fuente_contacto" value="<?php echo $data ['fuente_contacto']?>" style="border-color:#85C1E9;">
                             </div>
                             <div class="col text-center" style="width: 300px; " id="usuario2"><span id="fechaIxT" style="color: red;"></span>Estatus Cliente:
                            <input class="form-control mr-sm-3 " type="text" placeholder="" aria-label="Buscar"  name="estatus_cliente" id="estatus_cliente" value="<?php echo $data ['status_cliente']?>" style="border-color:#85C1E9;" disabled>
                             </div>
                             <div class="col text-center" style="width: 300px;" id="usuario3"><span id="fechaIxT" style="color: red;"></span>Dato General:
                            <input class="form-control mr-sm- " type="text" placeholder="" aria-label="Buscar"  name="dato_gen" id="dato_gen" value="<?php echo $data ['dato_gene']?>" style="border-color:#85C1E9;" disabled>
                             </div>
                </div>

                
                <div class="row mt-3 p-2">
                <div class="col text-center col-sm-5" style="width: 300px;" id="comentario2."><span id="fechaIxT" style="color: red;"></span>Comentario:
                    <input class="form-control "  name="comentario" id="comentario" style="height:80px" value="<?php echo $data ['comentario']?>">   
                    </div>

                    <div id="tempo3"></div>

                        <div class="col text-left mt-4" style="width: 100px; "  >

                        <button style="float: left; "  type="button"  class="btn btn-success btn-lg ml-r" value="modificarProsprecto" id="modificarProsprecto"><span class="fas fa-check-circle" ></span> Actualizar</button>

                        <a href="clientes.php" class="btn btn-danger btn-lg ml-3"> <span class="fa fa-ban" ></span> Cancelar</a>
                        </div>
                    
                   
                

                </div>

                
                
                    <?php }?>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="../content/js/function.js"></script>


</body>
</html>
