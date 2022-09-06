<?php
include("../views/restablecerPassword.php");
require("../models/enviarEmail.php");
include ("../models/delete.php");

if(isset($_POST['correo'])){

    $correo = $_POST['correo'];
    $token =  bin2hex(random_bytes(20));
    $consulta = new consultas();
    $res =  $consulta->buscarUsuario($_POST['correo']);
        if($res != ""){
             $cons =  $consulta->addPasswords($correo,$token);
            $email=new Email();
            $email->recuperarPassword($correo,$token);
            header("../views/restablecerPassword.php");
        }else{
            header("../views/restablecerPassword.php");
            echo'<script type="text/javascript">
                             alert("No se ha encontrado ninguna cuenta asociada a este correo!");
                             window.location.href="../views/restablecerPassword.php";
                             </script>';
        }
   
}
?>