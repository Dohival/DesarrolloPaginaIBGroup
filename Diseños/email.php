<?php
if(isset($_POST['Enviar']))
{
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['empresa']) && !empty($_POST['telefono']) && !empty($_POST['consulta'])){

$name = $_POST['nombre'];
$surname = $_POST['apellido'];
$email = $_POST['correo'];
$company = $_POST['empresa'];
$phone = $_POST['telefono'];
$message = $_POST['consulta'];

$header="From: noreply@example.com"."\r\n";
$header.="Reaply-To: noreply@example.com"."\r\n";
$header.="X-Mailer: PHP/".phpversion();
$mail=@mail($email,"Asunto Prueba",$message, $header);
if($mail){
    echo "<h4>Mail enviado</h4>";
}
}
}