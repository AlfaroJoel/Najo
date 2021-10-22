<?php



if(!empty($_POST['nombre']) && !empty($_POST['phone']) && !empty($_POST['mail']) && !empty($_POST['message'])){
    
        $nombre= $_POST['nombre'];
        $celular= $_POST['phone'];
        $email= $_POST['mail'];
        $mensaje= $_POST['message'];
        $destinatario = "najodevs@gmail.com"; //Correo a donde se envian los mails
        $asunto = "Contacto desde la pagina web Najo";

        $body = "De: " . $nombre . "\n"; 
        $body .= "Celular: " . $celular . "\n";
        $body .= " Mail: " . $email . "\n";
        $body .= " Mensaje: " . $mensaje . "\n";
        $mensaje .= "Enviado el " . date('d/m/Y', time());

        $header = "From: ". $email . "\r\n";
        $header.= "Reply-To: noreply@example.com". "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();

        $req = mail($destinatario, $asunto, $body, $header);

        //if req is true, mostrar mensaje de enviado
        header("Location:index.html");
}


