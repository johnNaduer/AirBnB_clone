<?php
$tareas = [
    "Tarea 1" => false,
    "Tarea 2" => false,
    "Tarea 3" => false,
    "Tarea 4" => false,
    "Tarea 5" => false,
    "Tarea 6" => false
];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tareas"]) && is_array($_POST["tareas"])) {
    foreach ($_POST["tareas"] as $tarea) {
        if (array_key_exists($tarea, $tareas)) {
            $tareas[$tarea] = true;
        }
    }
// Guardar el estado de las tareas en un archivo de texto
    $tareasJSON = json_encode($tareas);
    file_put_contents("tareas.json", $tareasJSON);
}

// Cargar el estado de las tareas desde el archivo de texto (si existe)
if (file_exists("tareas.json")) {
    $tareasJSON = file_get_contents("tareas.json");
    $tareas = json_decode($tareasJSON, true);
}

echo "<p>Tareas completadas:</p>";
echo "<ul>";
foreach ($tareas as $tarea => $completada) {
    echo "<li><input type='checkbox' disabled ";
    echo $completada ? "checked" : "";
    echo "> " . $tarea . "</li>";
}
echo "</ul>";
?>
