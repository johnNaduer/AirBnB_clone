<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tareas1 = isset($_POST["tareas1"]) ? $_POST["tareas1"] : array();
    $tareas2 = isset($_POST["tareas2"]) ? $_POST["tareas2"] : array();

    // Procesar tareas del Formulario 1
    echo "<h2>Formulario 1</h2>";
    if (!empty($tareas1)) {
        echo "Tareas completadas:<br>";
        echo "<ul>";
        foreach ($tareas1 as $tarea) {
            echo "<li>" . $tarea . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No se seleccionaron tareas en el Formulario 1.";
    }

    // Procesar tareas del Formulario 2
    echo "<h2>Formulario 2</h2>";
    if (!empty($tareas2)) {
        echo "Tareas completadas:<br>";
        echo "<ul>";
        foreach ($tareas2 as $tarea) {
            echo "<li>" . $tarea . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No se seleccionaron tareas en el Formulario 2.";
    }
}
?>

