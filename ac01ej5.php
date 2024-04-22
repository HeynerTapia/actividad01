<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combinación de Nombres y Apellidos</title>
</head>
<body>
    <h1>Combinación de Nombres y Apellidos</h1>
    <ul>
        <?php
        // Función para combinar nombres y apellidos
        function combinarNombresApellidos($nombres, $apellidos) {
            // Inicializar un array para almacenar los nombres y apellidos combinados
            $nombresApellidos = [];
            // Mezclar los arreglos de nombres y apellidos de forma aleatoria
            shuffle($nombres);
            shuffle($apellidos);
            // Iterar sobre ambos arreglos para combinarlos
            for ($i = 0; $i < count($nombres) && $i < count($apellidos); $i++) {
                // Formatear el nombre y apellido combinado
                $nombreFormateado = ucfirst($nombres[$i]); // Convertir la primera letra en mayúscula
                $apellidoFormateado = ucfirst($apellidos[$i]); // Convertir la primera letra en mayúscula
                // Agregar el nombre y apellido combinado al nuevo arreglo
                $nombresApellidos[] = $nombreFormateado . " " . $apellidoFormateado;
            }
            return $nombresApellidos;
        }
        // Arreglos de nombres y apellidos
        $nombres = ["juan", "maría", "josé", "ana", "pedro", "laura", "diego", "sofía", "carlos", "lucía"];
        $apellidos = ["garcía", "martínez", "rodríguez", "fernández", "lópez", "pérez", "gonzález", "sánchez", "ramírez", "torres"];
        // Obtener la combinación de nombres y apellidos
        $nombresApellidosCombinados = combinarNombresApellidos($nombres, $apellidos);
        // Mostrar los nombres y apellidos combinados en una lista HTML
        foreach ($nombresApellidosCombinados as $nombreApellido) {
            echo "<li>$nombreApellido</li>";
        }
        ?>
    </ul>
</body>
</html>
