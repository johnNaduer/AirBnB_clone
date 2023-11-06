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

                    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Checklist en PHP</title>
    <!-- Agregar enlaces a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Formulario 1</h2>
                    </div>
                    <div class="card-body">
                        <p>Tareas completadas:</p>
                        <ul>
                            <?php
                            foreach ($tareas_formulario1 as $tarea => $completada) {
                                echo "<li><input type='checkbox' disabled ";
                                echo $completada ? "checked" : "";
                                echo "> " . $tarea . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Formulario 2</h2>
                    </div>
                    <div class="card-body">
                        <p>Tareas completadas:</p>
                        <ul>
                            <?php
                            foreach ($tareas_formulario2 as $tarea => $completada) {
                                echo "<li><input type='checkbox' disabled ";
                                echo $completada ? "checked" : "";
                                echo "> " . $tarea . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar enlaces a Bootstrap JS y jQuery (si es necesario) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

