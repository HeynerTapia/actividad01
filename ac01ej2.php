<?php
// Función para validar el inicio de sesión
function validarInicioSesion($usuarios_validos) {
    // Inicializar variables de usuario y contraseña
    $usuario = "";
    $contrasena = "";
    // Verificar si se han enviado los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el usuario y la contraseña ingresados por el usuario
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        // Validar el usuario y la contraseña
        if (array_key_exists($usuario, $usuarios_validos) && $usuarios_validos[$usuario] === $contrasena) {
            return "Inicio de sesión exitoso. Bienvenido, $usuario!";
        } else {
            return "INTRODUSCA USUARIO Y CONRSEÑA CORRECTA.";
        }
    }
    return "";
}
// Definir usuarios válidos y su contraseña asociada
$usuarios_validos = array(
    "juan" => "D153n0W3b2",
    "pedro" => "D153n0W3b2",
    "maria" => "D153n0W3b2",
    "raul" => "D153n0W3b2"
);
// Obtener el mensaje de inicio de sesión (si existe)
$mensaje_inicio_sesion = validarInicioSesion($usuarios_validos);
// Limpiar el mensaje si no se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $mensaje_inicio_sesion = "";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php echo $mensaje_inicio_sesion; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Usuario: <input type="text" name="usuario" value="<?php echo isset($usuario) ? htmlspecialchars($usuario) : ''; ?>"><br>
        Contraseña: <input type="password" name="contrasena"><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
