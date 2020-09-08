<?php ob_start();?>
<?php
session_start();
?>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php
    $us=$_POST["usuario"];
    $cont=$_POST["contrasena"];

    $_SESSION['user']=$us;
    $_SESSION['pw']=$cont;

  
include ("../models/acciones_clientes.php");
    $rob=new consul();
    $iniciar=$rob->login($us,$cont);
    
    if(sizeof($iniciar)>0){
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $us;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (600);//tiempo de 600segundos por sesion
       
        echo'<script type="text/javascript">
      
        alert("Usuario y/o contraseña correctos");
        window.location.href="../views/index.php";
        </script>';
      
    }else{
        echo'<script type="text/javascript">
        alert("Usuario y/o contraseña incorrectos");
     
        window.location.href="../";
        </script>';
    }
    




?>
<?php ob_end_flush();?>