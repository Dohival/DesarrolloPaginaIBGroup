<?php
$myemail = 'osvaldo_528@outlook.com';
$name = $_POST['nombre'];
$surname = $_POST['apellido'];
$email = $_POST['correo'];
$company = $_POST['empresa'];
$phone = $_POST['telefono'];
$message = $_POST['consulta'];
$
$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Apellido: $surname \n Correo: $email \n Empresa: $company \n Telefono: $phone \n Mensaje: \n $message";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
