<?php
    
    include 'liga_BD.php';
    
    
    if(isset($_POST['id'])){

        $sql="SELECT * FROM cliente WHERE correo='".$_POST['correo']."'";
        $consu=mysqli_query($link,$sql);
        $id = 0; 
        $titulo="";
        $nombre="";
        $apellido="";
        $empresa="";
        $departamento="";
        $fecha_nacimiento="";
        $genero="";
        $correo="";
        $telefono_casa="";
        $celular="";
        $fax="";
        $otro_tel="";
        $comuni_prefe="";
        $fb="";
        $yt="";
        $tw="";
        $ln="";
        $insta="";
        $idioma="";
        $fuente_prospecto="";
        $estatus_prospect="";
        $ncalle="";
        $depto="";
        $nombre="";
        $dir="";
        $cpostal="";
        $pais="";
        $region="";
        $estado="";
        $ciudad="";
        $localidad="";
        $agrupacion="";
        $cal="";
        $estatus_marital="";
        $hijos="";
        $notas_gen="";
        $nota_person="";
        $contac_equip="";
        while($row = mysqli_fetch_array($consu)) {
            $id = $row['id_cliente'];
            $titulo=$row['titulo'];
            $nombre=$row['nom_cliente'];
            $apellido=$row['apellido'];
            $empresa=$row['empresa'];
            $departamento=$row['departemento'];
            $fecha_nacimiento=$row['fecha_nacimiento'];
            $genero=$row['genero'];
            $telefono_casa=$row['telefono_casa'];
            $fax=$row['fax'];
            $otro_tel=$row['otro_felefono'];
            $comuni_prefe=$row['comunicacion_preferido'];
            $fb=$row['facebook'];
            $yt=$row['youtube'];
            $tw=$row['twitter'];
            $ln=$row['linkedln'];
            $insta=$row['instagram'];
            $idioma=$row['idioma_preferido'];
            $fuente_prospecto=$row['fuente_prospecto'];
            $estatus_prospect=$row['estatus_prospecto'];
            $ncalle=$row['num_calle'];
            $depto=$row['depto_unidad'];
            $nombre=$row['nombre'];
            $dir=$row['direccion'];
            $cpostal=$row['codigo_postal'];
            $pais=$row['pais'];
            $region=$row['region'];
            $estado=$row['estado'];
            $ciudad=$row['ciudad'];
            $localidad=$row['localidad'];
            $agrupacion=$row['agrupamiento'];
            $cal=$row['calificacion'];
            $estatus_marital=$row['estatus_marital'];
            $hijos=$row['hijos'];
            $notas_gen=$row['notas_gen'];
            $nota_person=$row['nota_personal_contacto'];
            $contac_equip=$row['contacto_equipo'];
    
        }
        $sql="UPDATE cliente SET id_cliente='".$id."', titulo='".$titulo."',
        nom_cliente='".$_POST['usuario']."', apellido='".$_POST['apellido']."', empresa='".$empresa."',
        departemento='".$departamento."', fecha_nacimiento='".$fecha_nacimiento."', genero='".$genero."',
        correo='".$_POST['correo']."', telefono_casa='".$telefono_casa."', celular='".$_POST['telefono']."',
        fax='".$fax."', otro_felefono='".$otro_tel."', comunicacion_preferido='".$comuni_prefe."', facebook='".$fb."', 
        youtube='".$yt."', twitter='".$tw."', linkedln='".$ln."', instagram='".$insta."', 
        idioma_preferido='".$idioma."', fuente_prospecto='".$fuente_prospecto."', estatus_prospecto='".$estatus_prospect."', num_calle='".$ncalle."', 
        depto_unidad='".$depto."', nombre='".$nombre."', direccion='".$dir."', codigo_postal='".$cpostal."', pais='".$pais."',
        region='".$region."', estado='".$estado."', ciudad='".$ciudad."', localidad='".$localidad."', agrupamiento='".$agrupacion."',
        calificacion='".$cal."', estatus_marital='".$estatus_marital."', hijos='".$hijos."', notas_gen='".$notas_gen."', nota_personal_contacto='".$nota_person."',
        contacto_equipo='".$contac_equip."'
        WHERE correo='".$_POST['correo']."'";
        mysqli_query($link,$sql);

        $sql="UPDATE dato_gen SET id='".$_POST['id']."', nombre='".$_POST['usuario']."',
        telefono='".$_POST['telefono']."', correoda='".$_POST['correo']."', fecha_contacto='".$_POST['fecha_seguimiento']."',
        fecha_seguimiento='".$_POST['fecha_tarea']."', comentario='".$_POST['comentario']."', seguimiento='".$_POST['seguimiento']."',
        tarea='".$_POST['tarea']."', statuss='".$_POST['estatus']."', fuente_contacto='".$_POST['fuente_contacto']."',
        productos='".$_POST['nombre']."', status_cliente='".$_POST['estatus_cliente']."', dato_gene='".$_POST['dato_gen']."', hora_seguimeinto='', hora_tarea=''
        WHERE id='".$_POST['id']."'";
        mysqli_query($link,$sql);

       
        
        $sql="INSERT INTO historial(correo, producto, seguimineto, fechasegui, tarea, fechatarea, comentario, estatus_histo, hrs_tarea, hrs_seguimiento) 
        VALUES ('".$_POST['correo']."','".$_POST['nombre']."','".$_POST['seguimiento']."','".$_POST['fecha_seguimiento']."','".$_POST['tarea']."','".$_POST['fecha_tarea']."','".$_POST['comentario']."','".$_POST['estatus']."','','')";
        mysqli_query($link,$sql); 

        echo'<script type="text/javascript">
            alert("Datos actualizada exitosamente");
            </script>';
        mysqli_close($link);
    }
    ?>