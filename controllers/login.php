<?php ob_start();
include ("../models/acciones_clientes.php");
//include("../models/enviar_email_pass.php");
require("../models/enviarEmail.php");
session_start();
?>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php
    if (isset($_POST["registrar"])) {
        $name = $_POST['nombre'];
        $apellidoP = $_POST['apellido_paterno'];
        $apellidoM = $_POST['apellido_materno'];
        $email = $_POST['correo'];
        $curp = $_POST['curp'];
        $tel = $_POST['telefono'];
                
        $rob=new consul();
        $pass = $rob->genera_contrasena();
        $existeUsuario=$rob->existeUsuario($email);
        $existeCurp = $rob->existeCurp($curp);
        if (!$existeUsuario) {
            if (!$existeCurp) {
                $rob->crear_cuenta($name,$apellidoP,$apellidoM,$email,$curp,$tel,$pass);
                $enviar = new email();
                $send = $enviar->enviar($pass,$email);
                echo'<script type="text/javascript">
                alert("¡Registrado éxitosamente! \nTe hemos enviado un correo electrónico con tu contraseña. Por favor, verifica tu correo para iniciar sesión.");
                window.location.href="../index.php";
                </script>';
            }else{
                echo'<script type="text/javascript">alert("La curp ya ha sido registrada con otro usuario"); window.location.href="../views/registro.php";</script>';
            }
        }else{
            echo'<script type="text/javascript">alert("El correo ya se encuentra registrado"); window.location.href="../views/registro.php";</script>';
        }                
    }else{
        $us=$_POST["usuario"];
        $cont=$_POST["contrasena"];

        $_SESSION['user']=$us;
        $_SESSION['pw']=$cont;

        $rob=new consul();
        $iniciar=$rob->login($us,$cont);
        
        if(sizeof($iniciar)>0){
            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $us;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (600);//tiempo de 600segundos por sesion
           
            echo'<script type="text/javascript">     
            //alert("Usuario y/o contraseña correctos");
            window.location.href="../views/index.php";
            </script>';          
        }else{
            echo'<script type="text/javascript">
            alert("Usuario y/o contraseña incorrectos");   
            window.location.href="../";
            </script>';
        }   
    }

?>
<?php ob_end_flush();?>