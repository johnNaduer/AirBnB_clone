<?php
$tareas_formulario1 = [
    "Tarea 1" => false,
    "Tarea 2" => false,
    "Tarea 3" => false,
    "Tarea 4" => false
];

$fechaInicio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tareas"]) && is_array($_POST["tareas"])) {
    if (isset($_POST["formulario1"])) {
        foreach ($_POST["tareas"] as $tarea) {
            if (array_key_exists($tarea, $tareas_formulario1)) {
                $tareas_formulario1[$tarea] = true;
            }
        }

        // Guardamos la fecha seleccionada solo si la "Tarea 3" está marcada
        if (in_array("Tarea 3", $_POST["tareas"]) && isset($_POST["fechaInicio"])) {
            $fechaInicio = $_POST["fechaInicio"];
        }
    }

    $tareasJSON_formulario1 = json_encode($tareas_formulario1);
    file_put_contents("tareas_formulario1.json", $tareasJSON_formulario1);

    // Guardamos la fecha en un archivo solo si la "Tarea 3" está marcada
    if (in_array("Tarea 3", $_POST["tareas"])) {
        file_put_contents("fecha_inicio_formulario1.txt", $fechaInicio);
    }
}

if (file_exists("tareas_formulario1.json")) {
    $tareasJSON_formulario1 = file_get_contents("tareas_formulario1.json");
    $tareas_formulario1 = json_decode($tareasJSON_formulario1, true);
}

if (file_exists("fecha_inicio_formulario1.txt")) {
    $fechaInicio = file_get_contents("fecha_inicio_formulario1.txt");
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

                        <label for="tarea3">Tarea 3</label>
                        <input type="date" id="fechaInicio" name="fechaInicio" disabled value="<?php echo $fechaInicio; ?>">
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

