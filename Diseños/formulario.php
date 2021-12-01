<?php
if (isset($_POST['Enviar'])) {
    /*  $myemail = 'nombre@dominio.com';
    $name = $_POST['nombre'];
    $surname = $_POST['apellido'];
    $email = $_POST['correo'];
    $company = $_POST['empresa'];
    $phone = $_POST['telefono'];
    $message = $_POST['consulta'];

    $email_subject = "Nuevo mensaje: $subject";
    $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Apellido: $surname \n Correo: $email \n Empresa: $company \n Telefono: $phone \n Mensaje: \n $message";
    $headers = "From: $email";
    mail($myemail, $email_subject, $email_body, $headers);
    echo "El mensaje se ha enviado correctamente";*/
    $name = $_POST['nombre'];
    $mail = $_POST['correo'];
    $phone = $_POST['telefono'];
    $message = $_POST['consulta'];

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "Teléfono de contacto: " . $phone . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'nombre@dominio.com';
    $asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

    mail($para, $asunto, utf8_decode($message), $header);

    header("Location:index.html");
}
?>
<section id="formulario">
            <form class="form">
                <h2>¿Deseas mayor información?</h2>
                <p>Deja tu consulta y nos pondremos en contacto con usted</p>
                <div class="datos">
                    <div class="info-contacto">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" />
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" />
                    </div>
                    <input type="email" id="correo" name="correo" placeholder="Correo electrónico" />
                    <div class="info-contacto">
                        <input type="text" id="empresa" name="empresa" placeholder="Empresa" />
                        <input type="tel" id="telefono" name="telefono" placeholder="Número de teléfono" />
                    </div>
                    <textarea id="consulta" name="consulta" placeholder="Déjanos tu consulta aquí"></textarea>
                </div>
                <div class="form-boton">
                    <button name="Enviar" type="submit">Enviar</button>
                </div>
            </form>
        </section>
