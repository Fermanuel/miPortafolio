<?php

// Definir destinatario 
$to = 'manuelhola9@gmail.com';

// Obtener datos del formulario
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$from = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

// Validar email
if (filter_var($from, FILTER_VALIDATE_EMAIL)) {

  // Armar cabeceras
  $headers = [
    'From' => ($name?"<$name> ":'') . $from,
    'X-Mailer' => 'PHP/' . phpversion()
  ];
  
  // Enviar email 
  mail($to, $subject, $message."\r\n\r\nfrom: " . $_SERVER['REMOTE_ADDR'], $headers);

  // Mostrar mensaje de éxito
  die('OK');

} else {

  // Mostrar error de email inválido
  die('Invalid address'); 

}

?>