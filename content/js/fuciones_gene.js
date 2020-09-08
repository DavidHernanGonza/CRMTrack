function elimCliente(id) {
    
    $.ajax({
        type: "POST",
        url: "../controllers/delete.php",
        data: "op=del" + "&id=" + id,
        success:function(r){
            $("#tempo").html(r);
        }
    });
}
function elimProspecto(id) {
    
    $.ajax({
        type: "POST",
        url: "../controllers/delete.php",
        data: "op1=del1" + "&id=" + id,
        success:function(r){
            $("#tempo").html(r);
        }
    });
}
function guardarUser(){

    var datos = "add_cliente_usuario=0" +"&titulo=" + $("#titulo").val() +"&nombre=" + $("#nombre").val() +"&apellido=" + $("#apellido").val() + 
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
    + "&tw=" + $("#tw").val() + "&ln=" + $("#ln").val() + "&insta=" + $("#insta").val();
    console.log(datos);
   $.ajax({
        type: "POST",
        url: "../../controllers/add.php",
        data: datos,
        success:function(r){
            $("#tempo2").html(r);
        }
    });    

}