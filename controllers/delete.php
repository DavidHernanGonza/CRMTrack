<?php 
include ("../models/delete.php");
  
if(isset($_POST["op"]) &&  $_POST["op"]=="del"){ 
    $del_cliente = new consultas();
    $res =  $del_cliente->eliminarClienteBD($_POST["id"]);
}
if(isset($_POST["op1"]) &&  $_POST["op1"]=="del1"){ 
    $del_prospecto = new consultas();
    $res =  $del_prospecto->eliminarCliente_prospectoBD($_POST["id"]);
}
?>