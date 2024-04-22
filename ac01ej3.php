<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Números Primos Menores a 110</title>
</head>
<body>
    <?php
    // Función para verificar si un número es primo
    function esPrimo($numero) {
        // Verificar si el número es menor o igual a 1, en cuyo caso no es primo
        if ($numero <= 1) {
            return false;
        }
        // Iterar hasta la raíz cuadrada del número para verificar divisibilidad
        for ($i = 2; $i <= sqrt($numero); $i++) {
            // Si el número es divisible por $i, no es primo
            if ($numero % $i === 0) {
                return false;
            }
        }
        // Si no se encontraron divisores, el número es primo
        return true;
    }
    // Función para generar números primos menores a 110
    function generarNumerosPrimos($cantidad) {
        // Inicializar un array para almacenar los números primos
        $numerosPrimos = [];
        // Iterar hasta que la cantidad de números primos generados alcance la cantidad deseada
        while (count($numerosPrimos) < $cantidad) {
            // Generar un número aleatorio entre 2 y 109 (menor a 110)
            $numero = mt_rand(2, 109);
            // Verificar si el número generado es primo y no está en el array de números primos
            if (esPrimo($numero) && !in_array($numero, $numerosPrimos)) {
                // Agregar el número primo al array
                $numerosPrimos[] = $numero;
            }
        }
        // Devolver el array de números primos generados
        return $numerosPrimos;
    }
    // Definir la cantidad de números primos a generar
    $cantidad = 20; // Puedes cambiar este valor según tus necesidades
    // Generar números primos
    $numerosPrimos = generarNumerosPrimos($cantidad);
    // Mostrar los números primos generados
    echo "<h2>Números Primos Generados:</h2>";
    echo "<ul>";
    foreach ($numerosPrimos as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
