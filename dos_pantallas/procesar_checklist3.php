<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tareas1 = [];
    $tareas2 = [];

    if (isset($_POST["tareas1"])) {
        foreach ($_POST["tareas1"] as $tarea => $valor) {
            $tareas1[$tarea] = $valor;
        }
    }

    if (isset($_POST["tareas2"])) {
        foreach ($_POST["tareas2"] as $tarea => $valor) {
            $tareas2[$tarea] = $valor;
        }
    }

    // Procesar tareas del Formulario 1
    echo "<h2>Formulario 1</h2>";
    echo "Tareas completadas:<br>";
    echo "<ul>";
    foreach ($tareas1 as $tarea => $valor) {
        if ($valor == 1) {
            echo "<li>" . $tarea . "</li>";
        }
    }
    echo "</ul>";

    // Procesar tareas del Formulario 2
    echo "<h2>Formulario 2</h2>";
    echo "Tareas completadas:<br>";
    echo "<ul>";
    foreach ($tareas2 as $tarea => $valor) {
        if ($valor == 1) {
            echo "<li>" . $tarea . "</li>";
        }
    }
    echo "</ul>";
}
?>

