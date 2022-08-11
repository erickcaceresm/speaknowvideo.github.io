<?php 
	$name = $_POST['name'];
  $phone = $_POST['phone'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';

  $servicios = $_POST['servicios'];
	$mensaje = "Nombre: ".$name."<br> Email: $email<br> Opción: $servicios<br> Mensaje:".$_POST['mensaje'];

	if(mail('sales@speaknowvideo.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>