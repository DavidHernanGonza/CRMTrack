$(document).ready(function(){
$('#modificarcliente').click(function(){
    
    
    if($('#dato_gen').val()!="" && $('#estatus_cliente').val()!="" && $('#id').val()!="" && $('#nombre').val()!="" && $('#usuario').val()!="" 
    && $('#apellido').val()!="" && $('#telefono').val()!="" && 
     $('#seguimiento').val()!="" && $('#fecha_seguimiento').val()!="" 
     && $('#tarea').val()!="" && $('#fecha_tarea').val()!="" &&
    $('#estatus').val()!="" && $('#fuente_contacto').val()!="" && $('#comentario').val()!=""){
        
        $('#modificarcliente').attr('disabled','disabled');
        $.ajax({
            type:"POST",
            url:"../models/editar.php",
            data: "id=" + $('#id').val() + "&nombre=" + $('#nombre').val() + "&usuario=" + $('#usuario').val() + "&apellido=" + 
            $('#apellido').val() + "&correo=" + $('#correo').val() + "&telefono=" + $('#telefono').val() +
            "&seguimiento=" + $('#seguimiento').val() + "&fecha_seguimiento=" + $('#fecha_seguimiento').val() +
            "&tarea=" + $('#tarea').val() + "&fecha_tarea=" + $('#fecha_tarea').val() +
            "&estatus=" + $('#estatus').val() + "&fuente_contacto=" + $('#fuente_contacto').val() +
            "&estatus_cliente=" + $('#estatus_cliente').val() + "&dato_gen=" + $('#dato_gen').val() +
            "&comentario=" + $('#comentario').val(),
            success:function(r){
                $("#tempo").html(r);
            }
        });
    }
    else{
        alert("Por favor, rellene todos campos");
      
    }
});

$('#modificarProsprecto').click(function(){
    
    
    if($('#id_pro').val()!=""  && $('#usuario').val()!="" && $('#apellido').val()!="" && $('#telefono').val()!="" 
    && $('#seguimiento').val()!="" && $('#fecha_seguimiento').val()!="" 
     && $('#tarea').val()!="" && $('#fecha_tarea').val()!="" &&
    $('#estatus').val()!="" && $('#fuente_contacto').val()!="" && $('#comentario').val()!="" && $('#hora_seguimiento').val()!=""
    && $('#hora_tarea').val()!=""){
        
        $('#modificarProsprecto').attr('disabled','disabled');
        $.ajax({
            type:"POST",
            url:"../models/editar.php",
            data: "id_pro=" + $('#id_pro').val() + "&usuario=" + $('#usuario').val() + "&apellido=" + 
            $('#apellido').val() + "&correo=" + $('#correo').val() + "&telefono=" + $('#telefono').val() +
            "&seguimiento=" + $('#seguimiento').val() + "&fecha_seguimiento=" + $('#fecha_seguimiento').val() +
            "&tarea=" + $('#tarea').val() + "&fecha_tarea=" + $('#fecha_tarea').val() +
            "&estatus=" + $('#estatus').val() + "&fuente_contacto=" + $('#fuente_contacto').val() +
            "&comentario=" + $('#comentario').val() + "&hora_seguimiento=" + $('#hora_seguimiento').val() + "&hora_tarea=" + $('#hora_tarea').val(),
            success:function(r){
                $("#tempo3").html(r);
            }
        });
    }
    else{
        alert("Por favor, rellene todos campos");
      
    }
});

$('#agregarcliente').click(function(){
    
    if($('#nombre').val()!=""  && $('#apellido').val()!="" && $('#celular').val()!="" && $('#correo').val()!=""){
     
        $.ajax({
            type:"POST",
            url:"../models/add_cliente.php",
            data: "accion=" + $('#accion').val() +"&titulo=" + $("#titulo").val() +"&nombre=" + $("#nombre").val() +"&apellido=" + $("#apellido").val() + 
            "&correo=" + $("#correo").val() + "&f_nacimiento=" + $("#f_nacimiento").val()
            + "&genero=" + $("#genero").val() + "&direccion=" + $("#direccion").val() + "&n_calle=" + $("#n_calle").val() + "&c_p=" + $("#c_p").val() + 
            "&pais=" + $("#pais").val()
            + "&region=" + $("#region").val() + "&estado=" + $("#estado").val() + "&ciudad=" + $("#ciudad").val() + "&localidad=" + $("#localidad").val() + 
            "&selec_lada1=" + $("#selec_lada1").val()
            + "&n_casa=" + $("#n_casa").val() + "&selec_lada2=" + $("#selec_lada2").val() + "&celular=" + $("#celular").val() + "&fax=" + $("#fax").val() + 
            "&selec_lada3=" + $("#selec_lada3").val()
            + "&otro_num=" + $("#otro_num").val() + "&empresa=" + $("#empresa").val() + "&departamento=" + $("#departamento").val() + 
            "&agrupacion=" + $("#agrupacion").val() + "&f_prospecto=" + $("#f_prospecto").val()
            + "&estatus_prospecto=" + $("#estatus_prospecto").val() + "&idioma=" + $("#idioma").val() + "&comunicacion=" + $("#comunicacion").val() +
             "&fb=" + $("#fb").val() + "&yt=" + $("#yt").val()
            + "&tw=" + $("#tw").val() + "&ln=" + $("#ln").val() + "&insta=" + $("#insta").val(),
           
            success:function(r){
                $("#tempo2").html(r);
            }
        });
    }
    else{
        alert("Por favor, rellene todos campos");
      
    }
});


});

