<?php

//echo json_encode($_POST);

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $email = $_POST['email'];
 $telefono = $_POST['telefono'];
 $mensaje = $_POST['mensaje'];
 $accion = $_POST['accion'];

 if($accion === 'contacto'){
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

 echo json_encode($respuesta);

?>