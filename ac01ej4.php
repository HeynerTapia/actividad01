<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis de Frase</title>
</head>
<body>
    <h2>Análisis de Frase</h2>
    <form method="post" action="">
        <label for="frase">Ingrese una frase:</label>
        <input type="text" id="frase" name="frase" required>
        <button type="submit">Analizar</button>
    </form>
    <?php
    // Función para analizar la frase y mostrar los resultados
    function analizarFrase() {
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener la frase ingresada por el usuario
            $frase = $_POST["frase"];
            // Contadores para la letra 'o' y las vocales
            $contador_o = 0;
            $contador_vocales = [
                'a' => 0,
                'e' => 0,
                'i' => 0,
                'o' => 0,
                'u' => 0
            ];
            // Analizar cada carácter de la frase
            for ($i = 0; $i < strlen($frase); $i++) {
                // Convertir el carácter a minúscula para hacer la comparación
                $caracter = strtolower($frase[$i]);  
                // Contar la letra 'o'
                if ($caracter == 'o') {
                    $contador_o++;
                } 
                // Verificar si es una vocal y contarla
                if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) {
                    $contador_vocales[$caracter]++;
                }
            }
            // Mostrar los resultados
            echo "<h3>Resultados:</h3>";
            echo "<p>La letra 'o' aparece $contador_o veces.</p>";
            echo "<p>Las vocales que aparecen son: ";
            // Filtrar las vocales que aparecen
            $vocales_aparecen = array_filter($contador_vocales, function($value) {
                return $value > 0;
            });
            echo implode(", ", array_keys($vocales_aparecen)) . ".</p>";
            echo "<p>Cada una de las vocales aparece:</p>";
            echo "<ul>";
            // Mostrar el conteo de cada vocal que aparece
            foreach ($contador_vocales as $vocal => $conteo) {
                if ($conteo > 0) {
                    echo "<li>$vocal: $conteo</li>";
                }
            }
            echo "</ul>";
        }
    }
    // Llamar a la función para analizar la frase
    analizarFrase();
    ?>
</body>
</html>
