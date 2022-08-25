<?php

include 'liga_BD.php';

    if($_POST['accion']=='agregarcliente'){ 
    

        $sql="INSERT INTO cliente (id_cliente, titulo, nom_cliente, apellido, empresa, departemento, fecha_nacimiento, id_genero, correo, telefono_casa, celular, fax, otro_felefono, comunicacion_preferido, facebook, youtube, twitter, linkedln, instagram, idioma_preferido, fuente_prospecto, estatus_prospecto, num_calle, depto_unidad, nombre, direccion, codigo_postal, pais, region, estado, ciudad, localidad, agrupamiento, calificacion, estatus_marital, hijos, notas_gen, nota_personal_contacto, contacto_equipo) VALUES (null, '".$_POST['titulo']."', '".$_POST['nombre']."', '".$_POST['apellido']."', '".$_POST['empresa']."', '".$_POST['departamento']."', '".$_POST['f_nacimiento']."', '1', '".$_POST['correo']."', '".$_POST['selec_lada1'].$_POST['n_casa']."', '".$_POST['selec_lada2'].$_POST['celular']."', '".$_POST['fax']."', '".$_POST['selec_lada3'].$_POST['otro_num']."', '".$_POST['comunicacion']."', '".$_POST['fb']."', '".$_POST['yt']."', '".$_POST['tw']."', '".$_POST['ln']."', '".$_POST['insta']."', '".$_POST['idioma']."', '".$_POST['f_prospecto']."', '".$_POST['estatus_prospecto']."', '".$_POST['n_calle']."', '".$_POST['departamento']."', 'x', '".$_POST['direccion']."', '".$_POST['c_p']."', '".$_POST['pais']."', '".$_POST['region']."', '".$_POST['estado']."', '".$_POST['ciudad']."', '".$_POST['localidad']."', '".$_POST['agrupacion']."', '0', 'indef', '0', '-', '-', 'indef')";
        mysqli_query($link,$sql);

        echo'<script type="text/javascript">
            alert("Datos agregados exitosamente");
            window.location.replace("../views/listaClienteAgregados.php");
            </script>';


         mysqli_close($link);
     
    }

    
?>