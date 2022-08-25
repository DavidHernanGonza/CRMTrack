<?php
require_once '../content/email/config.php';
require '../content/email/vendor/autoload.php';

class Email{

    function __construct(){
    }
	public function enviar($correo,$token){
        $link = "http://localhost/CRMTrack-master/controllers/cambiarPassword.php?key=" . $token;

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom($correo, "Udevit");
        $email->setSubject("Restablecer Password");
        $email->addTo('', "");
        $email->addContent("text/plain", "Restablecer Password");
        $email->addContent(
            "text/html", "<h1  style=text-align:center >Hola</h1> <br>
            <div style=text-align:center>Estás recibiendo este correo por que hiciste una solicitud de recuperación de contraseña para tu cuenta.</div> <br>
            <div style=text-align:center> <a href='".$link."' > <button type=button style=color:blue > Recuperar Contraseña</button> </a></div> 
            <br>  <div style=text-align:center>
            Si no desea cambiar su contraseña o no ha solicitado este cambio, haga caso omiso de este mensaje y elimínelo.
            <br> Gracias
            </div>
            "
            
        );


        $sendgrid = new \SendGrid('');
        try {
            $response = $sendgrid->send($email);
            echo'<script type="text/javascript">
                             alert("Revisa tu correo!");
                             window.location.href="../controllers/enviarEmail.php";
                             </script>';
           
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }

   
        
	}
}
?>