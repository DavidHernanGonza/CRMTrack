<?php
//require_once 'config.php';
include ("../content/vendor/autoload.php");

class Email{

    function __construct(){
    }

    public function enviar($correo){
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("cgarciapaez15@gmail.com", "bizbirije");
        $email->setSubject("Bizbirije");
        $email->addTo($correo, "Reporter@");
        $email->addContent("text/plain", "enviarpdfP");
        $email->addContent(
            "text/html", "<div> 
            <div align='center'> <img src='https://pbs.twimg.com/profile_images/1290889093316894720/TUV0UZjd_400x400.jpg'> </img></div>
            Hola Reporter@! <br>
            <p>
            Ya llegaste hasta aquí y eso es aguante! ¡Ya eres parte de nuestro equipo!<br>
            ¿Qué crees, con todo el corazón..¡Tu credencial va corriendo! <br><br>

            #Biz20 es una iniciativa independiente del Canal Once y nace durante la pandemia en 2020 por lo que hicimos Bizbirije
            con el fin de conectarnos con tod@s l@s reporter@s a traves de la nostalgia y la memoria. Conectate con nosostros uno que otro jueves
            a las 07:00 pm en los #biztalk o live por IG donde los niños que fueron conductores de Bizbirije y l@s reporter@s, 
            nos recuerdan lo que les dejó el programa. <br><br>

            Es un honor para nosotros entregarte tu credencial de reporter@ biz20, sabemos que tradó mucho tiempo pero ahora está en 
            tus manos para que la imprimas, la postees y compartas con el #PorFinTengoMiCredencial #biz20 #bizbirije - usa TikTok, IG o FB,
            usa todas las redes de biz20 para expresarte, inspiranos!    <br>
            Nuestros tiempos cambiaron y ya no es necesario usar el correo postal, creemos que es más amigable para el medio ambiente,
            así que esta vesión digital es digna de esta época.<br>
            Pasa la voz a l@s reporter@s que también la quieren, diles que esto es real, ayúdanos a esparcir el mensaje en tus redes
            ¡etiquétanos y disfrútala mucho! <br>
            Gracias por seguirnos en todas nuestras redes que aquí te dejamos y sigue cumpliendo con tu misión! <br><br>
    
            <a href='https://www.instagram.com/bizbirije.2020/'>  <strong> IG: @bizbirije.2020  </strong></a> <br>
            <a href='https://www.facebook.com/BIZBIRIJE.20>  <strong> FB: @bizbirije.20  </strong></a><br>
            <a href='https://www.youtube.com/c/biz2020'>  <strong> YT: @biz.20  </strong></a><br>
            <a href='https://twitter.com/bizbirije20' >  <strong> TT: @bizbirije.20  </strong></a><br>
            <a href= 'https://www.tiktok.com/@bizbirije.20?refer=embed'>  <strong> TW: @bizbirije20  </strong></a><br><br>

            Sigue a nuestros jefes de reporter@s y conéctate con ellos: <br><br>

            <strong> FRANCIA:</strong>  <a href=''>  <strong> @fran_castaneda  </strong></a> <br>
            <strong> MARIO:</strong>  <a href=''>  <strong> @mario_corona  </strong></a> <br>
            <strong> EMILIO:</strong>  <a href=''>  <strong> @yosoyestebansoberanes  </strong></a> <br>
            <strong> ALEX:</strong>  <a href=''>  <strong> @plutarcohaza  </strong></a> <br>
            <strong> JORGE:</strong>  <a href=''>  <strong> @jorge.garibay  </strong></a> <br><br>

            Espero que lo disfrutes mucho como nosotros dártela. <br>
            Ahora compártela con el mundo entero, que sepan quién eres! <br>
            ¡Los amamos reporter@s! <br>

            ¡Mucha gracias por tu paciencia! <br>
            Sinceramente <br><br>

            Todo el equipo de #biz20 <br>
            Los reporterQs y tus jefes dereporter@s: Francia, Jorge, Alex, Emilio y Mario. <br> <br>

            PD. Tienes un gran superpoder en ti, y una labor sumamente importante, nuestra admiración!! <br>
            Usalo con tu credencial y cumple con tu misión!! <br> <br> 

            </p> 
            </div>"
        );

        $file_encoded = base64_encode(file_get_contents("../content/mp.pdf"));
        $email->addAttachment(
        $file_encoded,
        "application/text",
    "mp.pdf",
    "attachment"
        );

        $file_encoded = base64_encode(file_get_contents("../content/Credencial_Reverso.png"));
        $email->addAttachment(
        $file_encoded,
        "application/text",
    "Credencial_Reverso.png",
    "attachment"
        );

        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }
}
?>