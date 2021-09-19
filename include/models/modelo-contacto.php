<?php

// require_once('PHPMailer/PHPMailerAutoload.php');
require_once "Mail/src/PHPMailer.php";
require_once "Mail/src/SMTP.php";
require_once "Mail/src/Exception.php";

//echo json_encode($_POST);

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$accion = $_POST['accion'];

/* $mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'cortesroadiegoalejandro@gmail.com';
$mail->isHTML();
$mail->Username = 'cortesroadiegoalejandro@gmail.com';
$mail->Password = '123456789';
$mail->SetFrom('cortesroadiegoalejandro@gmail.com');
$mail->Subject = 'Contacto Cliente Acousting';
$mail->Body = "Nombre: {$nombre} <br> Apellido: {$apellido} <br> Email: {$email} <br> Telefono: {$telefono} <br> Mensagem: {$mensage}.";
$mail->AddAddress('cortesroadiegoalejandro@gmail.com');

$mail->Send(); */

if($accion === 'contacto'){

    try {
        //code...
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->isHTML();
        $mail->Username = 'cortesroadiegoalejandro@gmail.com';
        $mail->Password = 'Cortes_1193201125-Roa;1086';
        $mail->SMTPSecure = "ssl";
        $mail->isHTML(true);
        $mail->SetFrom('cortesroadiegoalejandro@gmail.com');
        $mail->AddAddress('cortesroadiegoalejandro@gmail.com');
        $mail->Subject = 'Contacto Cliente Acousting';
        $mail->Body = "Nombre: {$nombre} <br> Apellido: {$apellido} <br> Email: {$email} <br> Telefono: {$telefono} <br> Mensagem: {$mensage}.";
    
        // $mail->send();

        if($mail->send())
        {
           $respuesta = array(
               'respuesta' => 'correcto',
               'para' => $to,
               'asunto' => $subject,
               'mensaje' => $message
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
             );
         }

        } catch (Exception $e) {
            // En caso de un error, tomar la excepción
            $respuesta = array(
               'error' => $e->getMessage()
            );
        }
    
        echo json_encode($respuesta);
    
 }


/*  if($accion === 'contacto'){
     try {
         //code...
         $to = "cortesroadiegoalejandro@gmail.com";
         $subject = "Contacto Cliente Acousting";
         $message = "Gracias por ponerte en contacto";
         $headers = 'From: ejemplo@gmail.com' . "\r\n" .
                    'Reply-To: ejemplo@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

         //Enviar correo
         $mail = mail($to, $subject, $message, $headers);

         if($mail)
         {
            $respuesta = array(
                'respuesta' => 'correcto',
                'para' => $to,
                'asunto' => $subject,
                'mensaje' => $message
             );
         }
         else{
            $respuesta = array(
                'respuesta' => 'error'
             );
         }

     } catch (Exception $e) {
         // En caso de un error, tomar la excepción
         $respuesta = array(
            'error' => $e->getMessage()
         );
     }
 }

 echo json_encode($respuesta); */

?>