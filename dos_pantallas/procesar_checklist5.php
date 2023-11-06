<?php
$tareas_formulario1 = [
    "Tarea 1" => false,
    "Tarea 2" => false,
    "Tarea 3" => false
];

$tareas_formulario2 = [
    "Tarea 4" => false,
    "Tarea 5" => false,
    "Tarea 6" => false
];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tareas"]) && is_array($_POST["tareas"])) {
    // Verificar si se envió el formulario 1
    if (isset($_POST["formulario1"])) {
        foreach ($_POST["tareas"] as $tarea) {
            if (array_key_exists($tarea, $tareas_formulario1)) {
                $tareas_formulario1[$tarea] = true;
            }
        }
    }

    // Verificar si se envió el formulario 2
    if (isset($_POST["formulario2"])) {
        foreach ($_POST["tareas"] as $tarea) {
            if (array_key_exists($tarea, $tareas_formulario2)) {
                $tareas_formulario2[$tarea] = true;
            }
        }
    }

    // Guardar el estado de las tareas en archivos de texto separados para cada formulario
    $tareasJSON_formulario1 = json_encode($tareas_formulario1);
    file_put_contents("tareas_formulario1.json", $tareasJSON_formulario1);

    $tareasJSON_formulario2 = json_encode($tareas_formulario2);
    file_put_contents("tareas_formulario2.json", $tareasJSON_formulario2);
}

// Cargar el estado de las tareas desde los archivos de texto (si existen)
if (file_exists("tareas_formulario1.json")) {
    $tareasJSON_formulario1 = file_get_contents("tareas_formulario1.json");
    $tareas_formulario1 = json_decode($tareasJSON_formulario1, true);
}

if (file_exists("tareas_formulario2.json")) {
    $tareasJSON_formulario2 = file_get_contents("tareas_formulario2.json");
    $tareas_formulario2 = json_decode($tareasJSON_formulario2, true);
}

// Mostrar el checklist del formulario 1
echo "<h2>Formulario 1</h2>";
echo "<p>Tareas completadas:</p>";
echo "<ul>";
foreach ($tareas_formulario1 as $tarea => $completada) {
    echo "<li><input type='checkbox' disabled ";
    echo $completada ? "checked" : "";
    echo "> " . $tarea . "</li>";
}
echo "</ul>";

// Mostrar el checklist del formulario 2
echo "<h2>Formulario 2</h2>";
echo "<p>Tareas completadas:</p>";
echo "<ul>";
foreach ($tareas_formulario2 as $tarea => $completada) {
    echo "<li><input type='checkbox' disabled ";
    echo $completada ? "checked" : "";
    echo "> " . $tarea . "</li>";
}
echo "</ul>";
?>

