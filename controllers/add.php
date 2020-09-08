<?php
include ("../models/acciones_clientes.php");
   /*--------------CLIENTE prospecto---------------------*/
    if(isset($_POST['add_cliente_usuario'])){
        $titulo=$_POST['titulo'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $correo=$_POST['correo'];
        $f_nacimiento =$_POST['f_nacimiento'];
        $genero=$_POST['genero'];
        $direccion=$_POST['direccion'];
        $n_calle=$_POST['n_calle'];
        $c_p=$_POST['c_p'];
        $pais =$_POST['pais'];
        $region=$_POST['region'];
        $estado=$_POST['estado'];
        $ciudad=$_POST['ciudad'];
        $localidad=$_POST['localidad'];
        $selec_lada1 =$_POST['selec_lada1'];
        $n_casa=$_POST['n_casa'];
        $selec_lada2=$_POST['selec_lada2'];
        $celular=$_POST['celular'];
        $fax=$_POST['fax'];
        $selec_lada3 =$_POST['selec_lada3'];
        $otro_num=$_POST['otro_num'];
        $empresa=$_POST['empresa'];
        $departamento=$_POST['departamento'];
        $agrupacion=$_POST['agrupacion'];
        $f_prospecto =$_POST['f_prospecto'];
        $estatus_prospecto=$_POST['estatus_prospecto'];
        $idioma=$_POST['idioma'];
        $comunicacion=$_POST['comunicacion'];
        $fb=$_POST['fb'];
        $yt =$_POST['yt'];
        $tw=$_POST['tw'];
        $ln=$_POST['ln'];
        $insta =$_POST['insta'];
        $ins = new consul();
        $insertar = $ins->insertar($titulo,$nombre,$apellido,$correo,$f_nacimiento,$genero,$direccion,$n_calle,$c_p,$pais,$region,$estado,$ciudad,
        $localidad,$selec_lada1,$n_casa,$selec_lada2,$celular,$fax,$selec_lada3,$otro_num,$empresa,$departamento,$agrupacion,$f_prospecto,$estatus_prospecto,
    $idioma,$comunicacion,$fb,$yt,$tw,$ln,$insta);
               echo'<script type="text/javascript">
            alert("usuario agregado exitosamente");
            window.location.href="../views/listaClienteAgregados.php";
        </script>';
    }
    
?>
