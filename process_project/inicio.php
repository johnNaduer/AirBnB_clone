<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Proyecto procesos RyC Consulting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        body, html {
            height: 100%;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            }


        .progress-bar {
            height: 40px;
            background-color: #f0f0f0;
        }

        .progress {
            height: 100%;
            width: 0;
            background-color: yellow;
            transition: width 0.3s, background-color 0.3s;
        }

        .vertical-center {
            display: flex;
            align-items: center;
        } 

/* Estilos adicionales para controlar el diseÃƒÂ±o horizontal */
.horizontal-container {
            display: flex;
}

.horizontal-container > div {
            margin-right: 80px; Agregar espacio de separaciÃƒÂ³n horizontal
 }
 
.horizontal-container > div:last-child {
            margin-right: 0; /* Eliminar el margen derecho del ÃƒÂºltimo elemento */
}


</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light fixed-top">
		<div class="text-white bg-success p-2">
			NOMBRE Y APELLIDO DEL USUARIO
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="navbar-nav mr-auto">
				<div class="offset-md-1 mr-auto text-center"></div>
				<a class="nav-item nav-link text-justify active ml-3 hover-primary" href="#">Inicio</a>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="#">Nosotros</a>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-justify ml-3" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Servicios
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Preguntas Frecuentes</a>
						<a class="dropdown-item" href="#">Compras</a>
						<a class="dropdown-item" href="servicios.html">Otros</a>
					</div>
				</li>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="">Salir</a>
			</div>
			<div class="text-center justify-content-center">
				<a class="btn btn-outline-primary" target="_blank" href="https://www.facebook.com">Facebook</a>
				<a class="btn btn-outline-danger" target="_blank" href="https://www.youtube.com">Youtube</a>
			</div>
		</div>

	</nav>


<div class="container">                        
                <div class="horizontal-container">

                                <div class="card">
                                        <h5 class="card-title">Proceso 1</h5>
                                        <div class="progress">
                                        <div class="progress-bar">
                                            
                                        </div>
                                        <div class="progress-percentage vertical-center" id="progress1">0%</div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba1">
                                            <label class="form-check-label" for="prueba1">Relación de los participantes</label>
                                        </div>
                                        <a href="https://docs.google.com/document/d/1nH6XMJKdyxcMJU4g_hjThlOeU_zZTECv/edit" target="_blank">- documento</a>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba2">
                                            <label class="form-check-label" for="prueba2">Programar las fechas y horas de ejecución</label>
                                        </div>
                                        <label>Fecha Inicio:
                                            <input type="date" id="fechaInicio">
                                        </label>
                                        <label>Fecha Final:
                                            <input type="date" id="fechaFin">
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba3">
                                            <label class="form-check-label" for="prueba3">Coordinar disponibilidad con el Expositor</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba4">
                                            <label class="form-check-label" for "prueba4">Recabar el material y exámenes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba5">
                                            <label class="form-check-label" for="prueba5">Coordinar el cronograma con soporte y edición de videos</label>
                                        </div>

                                </div>


                                <div class="card">
                                        <h5 class="card-title">Proceso 2</h5>
                                        <div class="progress">
                                        <div class="progress-bar">
                                            
                                        </div>
                                        <div class="progress-percentage vertical-center" id="progress2">0%</div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba1">
                                            <label class="form-check-label" for="prueba1">Creación de Usuario y clave de acceso a los participantes y de las sesiones en el ZOOM</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba2">
                                            <label class="form-check-label" for="prueba2">Presentacion del programa</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba3">
                                            <label class="form-check-label" for="prueba3">Ejecucion de las clases programadas</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba4">
                                            <label class="form-check-label" for="prueba4">Coordinaciones permanentes con el especialista de capacitacitacón de la entidad</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba5">
                                            <label class="form-check-label" for="prueba5">Monitoreo del programa y verificación de las subidas de los videos y materiales a la plataforma virtual</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba6">
                                            <label class="form-check-label" for="prueba6">Realizar la encuesta a nivel de satisfacción</label>
                                        </div>   
                                </div>

                                <div class="card">
                                        <h5 class="card-title">Proceso 3</h5>
                                        <div class="progress">
                                        <div class="progress-bar">
                                            
                                        </div>
                                        <div class="progress-percentage vertical-center" id="progress3">0%</div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba1">
                                            <label class="form-check-label" for="prueba1">Procesar las notas</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba2">
                                            <label class="form-check-label" for="prueba2">Redacción del informe de acuerdo a los TDR</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba3">
                                            <label class="form-check-label" for="prueba3">Cordinar para emisión de la Factura</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba4">
                                            <label class="form-check-label" for="prueba4">Imprimir los certificados</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba5">
                                            <label class="form-check-label" for="prueba5">Entregar a la institución el informe, certificados más la factura</label>
                                        </div>
                                </div>


                                <div class="card">
                                        <h5 class="card-title">Proceso 4</h5>
                                        <div class="progress">
                                        <div class="progress-bar">
                                            
                                        </div>
                                        <div class="progress-percentage vertical-center" id="progress4">0%</div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba1">
                                            <label class="form-check-label" for="prueba1">Hacer el seguimiento para el pago</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba2">
                                            <label class="form-check-label" for="prueba2">Realizar la verificaciÃƒÂ³n del CCI y la DetracciÃƒÂ³n en nuestra cuentas por el portal web mef</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba3">
                                            <label class="form-check-label" for="prueba3">Ejecucion de las clases programadas</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba4">
                                            <label class="form-check-label" for="prueba4">Coordinaciones permanentes con el especialista de capacitacitacón de la entidad</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba5">
                                            <label class="form-check-label" for="prueba5">Monitoreo del programa y verificación de las subidas de los videos y materiales a la plataforma virtual</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="prueba6">
                                            <label class="form-check-label" for="prueba6">Realizar la encuesta a nivel de satisfacción</label>
                                        </div>   
                                </div>

        </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Función para manejar el progreso de un proceso espacio
        function handleProgress(processContainer, progressElement) {
            const checkboxes = processContainer.querySelectorAll('input[type="checkbox"]');
            const progressBar = processContainer.querySelector('.progress');
            const circle = processContainer.querySelector('.circle');

            checkboxes.forEach((checkbox, index) => {
                checkbox.addEventListener('change', () => {
                    const checkedCheckboxes = processContainer.querySelectorAll('input[type="checkbox"]:checked');
                    const progressWidth = (checkedCheckboxes.length / checkboxes.length) * 100;
                    progressBar.style.width = progressWidth + '%';
                    // Actualizamos el elemento que muestra el porcentaje
                    progressElement.textContent = `${Math.round(progressWidth)}%`;

                    if (checkedCheckboxes.length === checkboxes.length) {
                        progressBar.style.backgroundColor = 'green';
                        circle.style.backgroundColor = 'green'; 
                    } else {
                        progressBar.style.backgroundColor = 'yellow';
                        circle.style.backgroundColor = 'yellow';
                    }
                });
            });
        }

        // Manejar el progreso de "Proceso 1"
        handleProgress(document.querySelector('.card'), document.getElementById('progress1'));
    </script>
</body>
</html>
