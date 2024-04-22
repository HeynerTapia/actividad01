<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Función para obtener el agente de usuario (user agent) del cliente
    function obtenerAgenteUsuario() {
        // Comprobamos si el agente de usuario está disponible en la superglobal $_SERVER
        if(isset($_SERVER['HTTP_USER_AGENT'])) {
            // Devolvemos el agente de usuario
            return $_SERVER['HTTP_USER_AGENT'];
        } else {
            // Si no está disponible, devolvemos un mensaje de error
            return "Agente de usuario no disponible";
        }
    }
    // Función para determinar el navegador basado en el agente de usuario
    function determinarNavegador($agente_usuario) {
        // Comprobamos si el agente de usuario contiene la cadena 'MSIE' para identificar Internet Explorer
        if (strpos($agente_usuario, 'MSIE') !== false) {
            return "Internet Explorer";
        } elseif (strpos($agente_usuario, 'Firefox') !== false) { // Verificamos si contiene 'Firefox' para Mozilla Firefox
            return "Mozilla Firefox";
        } elseif (strpos($agente_usuario, 'Chrome') !== false) { // Verificamos si contiene 'Chrome' para Google Chrome
            return "Google Chrome";
        } elseif (strpos($agente_usuario, 'Safari') !== false) { // Verificamos si contiene 'Safari' para Safari
            return "Safari";
        } elseif (strpos($agente_usuario, 'Opera') !== false) { // Verificamos si contiene 'Opera' para Opera
            return "Opera";
        } else {
            return "Desconocido"; // Si no se identifica ningún navegador, se devuelve 'Desconocido'
        }
    }
    // Función para mostrar el mensaje de bienvenida y el navegador
    function mostrarMensajeBienvenida($mensaje, $navegador) {
        // Imprimimos el mensaje de bienvenida
        echo "$mensaje<br>";
        // Imprimimos el navegador utilizado
        echo "Estás utilizando el navegador: $navegador";
    }
    // Obtener el agente de usuario
    $agente_usuario = obtenerAgenteUsuario();
    // Definir un mensaje de bienvenida
    $mensaje_bienvenida = "¡Bienvenido!";
    // Determinar el navegador
    $navegador = determinarNavegador($agente_usuario);
    // Mostrar el mensaje de bienvenida y el navegador
    mostrarMensajeBienvenida($mensaje_bienvenida, $navegador);
    ?>
</body>
</html>
