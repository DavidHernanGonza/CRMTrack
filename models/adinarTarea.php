<?php 

include 'liga_BD.php';
if(isset($_POST['correo'])){
    
      

        //$sql="INSERT INTO dato_gen(id, nombre, telefono, correoda, fecha_contacto, fecha_seguimiento, comentario, seguimiento, tarea, statuss, fuente_contacto, productos, status_cliente, dato_gene, hora_seguimeinto, hora_tarea) 
        //VALUES (null,'".$_POST['nombre'].$_POST['apellido']."','".$_POST['telefono']."'
        //,'".$_POST['correo']."','".$_POST['fecha_tarea']."','".$_POST['fecha_seguimiento']."','".$_POST['comentario']."',
        //'".$_POST['seguimiento']."','".$_POST['tarea']."','".$_POST['estatus']."','".$_POST['fuentecontacto']."','','','',
        //'".$_POST['hora_seguimiento']."','".$_POST['hora_tarea']."')";
        //mysqli_query($link,$sql);
        
        $sql="INSERT INTO `dato_gen`(`id`, `nombre`, `telefono`, `correoda`, `fecha_contacto`, `fecha_seguimiento`, `comentario`
        , `seguimiento`, `tarea`, `statuss`, `fuente_contacto`, `productos`, `status_cliente`, `dato_gene`, `hora_seguimiento`, `hora_tarea`) 
        VALUES (null,'".$_POST['nombre'].$_POST['apellido']."','".$_POST['telefono']."','".$_POST['correo']."'
        ,'".$_POST['fecha_tarea']."','".$_POST['fecha_seguimiento']."','".$_POST['comentario']."',1,1,'1','".$_POST['fuentecontacto']."','1',''
        ,'','".$_POST['hora_seguimiento']."','".$_POST['hora_tarea']."')";
        mysqli_query($link,$sql);

        $sql="INSERT INTO historial(correo, producto, seguimineto, fechasegui, tarea, fechatarea, comentario, estatus_histo, hora_tarea, hora_seguimiento) 
        VALUES ('".$_POST['correo']."','','".$_POST['seguimiento']."','".$_POST['fecha_seguimiento']."','".$_POST['tarea']."','".$_POST['fecha_tarea']."','".$_POST['comentario']."','".$_POST['estatus']."','".$_POST['hora_tarea']."','".$_POST['hora_seguimiento']."')";
        mysqli_query($link,$sql);

        echo '<script type="text/javascript">
        alert("Tarea Asignada exitosamente");
        window.location.href="../views/index.php";
        </script>';

     
        mysqli_close($link);

    }

    ?>