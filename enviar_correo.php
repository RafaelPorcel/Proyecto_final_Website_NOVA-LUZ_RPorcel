<?php
  // Recibir los datos del formulario
  $destinatario = $_POST['email'];
  $nombre = $_POST['name'];
  $asunto = $_POST['subject'];
  $mensaje = $_POST['message'];
  $cabeceras = "De: " . $nombre . " <" . $destinatario . ">\r\n";
 
  // Enviar correo
  if (mail("iluminacion_novaluz@hotmail.com", $asunto, $mensaje, $cabeceras)) {
    echo "El correo electrónico ha sido enviado.";
  } else {
    echo "Error de envío.";
  }
?>



