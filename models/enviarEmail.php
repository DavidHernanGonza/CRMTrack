<?php
require_once '../content/email/config.php';
require '../content/email/vendor/autoload.php';

class Email{

    function __construct(){
    }
	public function recuperarPassword($correo,$token){
        $link = "http://localhost/CRMTrack-master/controllers/cambiarPassword.php?key=" . $token;

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom('lopezbarrientosrosadamaris@gmail.com', "Udevit");
        $email->setSubject("Restablecer Password");
        $email->addTo($correo, "");
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


        $sendgrid = new \SendGrid('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');
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


    public function enviar($password,$destinatario){

        $email = new \SendGrid\Mail\Mail();

        $email->setFrom("lopezbarrientosrosadamaris@gmail.com", "UDEV-IT"); //remitente
        $email->setSubject("¡Password!"); //asunto
        $email->addTo($destinatario); //destinatario
        $email->addContent("text/plain", "Envío de contraseña");
        $email->addContent(
            "text/html", "<strong>¡Hola, tu contraseña para iniciar sesión es: $password!</strong>"
        );
        
        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);
            /*print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";*/
        } catch (Exception $e) {
            echo 'Caught exception: '.  $e->getMessage(). "\n";
        } 
    }
}
?>