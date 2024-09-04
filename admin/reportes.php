<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <?php include '../shared/headerAdmin.php'; ?>

    <main class="container mb-4">
        <div class="login-container col-6 mb-4">
            <h2 class="text-start mb-2 mb-4">Reportes</h2>

            <form id="reporteForm" method="POST">
                <div class="mb-4">
                    <label class="form-label">Reporte General</label>
                    <div class="d-grid gap-2 mb-3">
                        <button id="generarBtn" class="btn btn-outline-primary" type="button" name="tipoReporte" value="general">Generar</button>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Reporte por Filtro</label>
                    <select class="form-select mb-3" name="categoria" aria-label="Default select example">
                        <option selected>Categoria de Curso</option>
                        <option value="1">Idiomas</option>
                        <option value="2">Programacion</option>
                        <option value="3">Diseño</option>
                        <option value="4">Tecnologia</option>
                        <option value="5">Ofimatica</option>
                        <option value="6">Gestion de Proyectos</option>
                    </select>
                    <div class="d-grid gap-2 mb-4">
                        <button class="btn btn-outline-primary" type="submit" name="tipoReporte" value="filtro">Generar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php include "../shared/footer.php"; ?>

    <!-- Incluir el archivo JavaScript -->
    <script src="../js/generarReporte.js"></script>

</body>

</html>
