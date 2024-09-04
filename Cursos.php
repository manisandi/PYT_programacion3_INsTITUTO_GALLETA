
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <?php include './shared/header.php'; ?>

    <main class="container mt-5 mb-3">
        <!-- Campo de búsqueda -->
        <input type="text" id="searchInput" oninput="highlightCourses()" placeholder="Buscar cursos..." class="form-control mb-4">
        <div class="row justify-content-center" id="coursesContainer">
        
            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Microsoft Word Basico</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónic no tiene sesiones en vivo</p>
                        <a href="./descripcionesCursos/wordbasico.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 ">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Microsoft Word Intermedio</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/wordintermedio.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body ">
                        <h5 class="card-title course-title ">Microsoft Excel Avanzado</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/excelavanzado.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Java Basico</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/javabasico.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">AutoCAD 2D</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/auto.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Photoshop Basico</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/photoshop.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Induccion a las Bases de datos</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/induccion.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Robotica</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/robotica.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title"> Adobe Ilustrador</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/adobe.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Mandarin</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/mandarin.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Italiano</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/italiano.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Francés</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/frances.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Programacion Basica con Python</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/python.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Administracion de Proyectos con MS-Project</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/ms-pro.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title course-title">Tecnico en Computacion de Informatica</h5>
                        <p class="card-text">Modalidad: En línea / Asincrónico (no tiene sesiones en vivo)</p>
                        <a href="./descripcionesCursos/informatica.php" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
    <script>
function highlightCourses() {
    var input = document.getElementById('searchInput');
    var filter = input.value.toUpperCase();
    var cards = document.getElementsByClassName('card'); // Asegúrate de que 'card' es la clase de las tarjetas de cursos
    var found = false; // Bandera para detectar si se encontraron coincidencias

    for (var i = 0; i < cards.length; i++) {
        var title = cards[i].getElementsByClassName('course-title')[0];
        if (title) {
            var titleText = title.textContent || title.innerText;
            if (titleText.toUpperCase().includes(filter)) {
                cards[i].style.display = ""; // Muestra el curso que coincide
                found = true;
            } else {
                cards[i].style.display = "none"; // Oculta los cursos que no coinciden
            }
        }
    }

    // Si no se encuentra ninguna coincidencia y hay un filtro aplicado, puede optar por mostrar un mensaje o manejar de otra manera
    if (!found && filter) {
        alert('No se encontraron cursos que coincidan con la búsqueda.');
    }
}
    </script>
    </body>
</html>
        <!-- Aquí continúan las otras cartas, puedes adaptar el mismo esquema para las siguientes filas -->

    </main>

    <?php include "./shared/footer.php"; ?>
</body>

</html>