<?php
// resolver.php

// Función para resolver la ecuación de segundo grado
function resolver_ecuacion($a, $b, $c) {
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante > 0) {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return ["x1" => $x1, "x2" => $x2];
    } elseif ($discriminante == 0) {
        $x = -$b / (2 * $a);
        return ["x" => $x];
    } else {
        return null; // Raíces complejas
    }
}

// Verificar si se han enviado los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Validar que a no sea cero
    if ($a == 0) {
        echo "El coeficiente 'a' no puede ser cero en una ecuación cuadrática.";
    } else {
        $resultado = resolver_ecuacion($a, $b, $c);

        if ($resultado) {
            header('Content-Type: application/json');
            echo json_encode($resultado);
        } else {
            header('Content-Type: application/json');
            echo json_encode(["error" => "La ecuación tiene raíces complejas."]);
        }
    }
} else {
    echo "No se han enviado datos.";
}
?>
