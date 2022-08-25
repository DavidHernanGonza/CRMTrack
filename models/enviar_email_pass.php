<?php
class email{
    public function enviar($password,$destinatario){
        // Uncomment next line if you're not using a dependency loader (such as Composer)
        require("../SendGrid/sendgrid-php/sendgrid-php.php");

        $email = new \SendGrid\Mail\Mail();

        $email->setFrom("", "UDEV-IT"); //remitente
        $email->setSubject("¡Password!"); //asunto
        $email->addTo($destinatario); //destinatario
        $email->addContent("text/plain", "Envío de contraseña");
        $email->addContent(
            "text/html", "<strong>¡Hola, tu contraseña para iniciar sesión es: $password!</strong>"
        );
        
        $sendgrid = new \SendGrid('');
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