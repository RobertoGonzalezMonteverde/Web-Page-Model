<?php 
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $asunto = 'Formulario Rellenado';
  $mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];
if(mail('roberto.gonzalez.monteverde@estudiantat.upc.edu', $asunto, $mensaje)){
    echo 'ENVIADO!';
} else{
    echo 'ERROR AL ENVIAR';
}

?>