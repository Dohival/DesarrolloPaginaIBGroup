<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/estilos.css">
        <link rel="stylesheet" href="./CSS/estilosformulario.css">
        <?php
        include './Diseños/Header.php';
        ?>
    </head>
    <body>
        <div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <section id="formulario">
            <div class="form">
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
            </div>
        </section>
    </body>
    <?php
    include './Diseños/Footer.php';
    ?>
</html>