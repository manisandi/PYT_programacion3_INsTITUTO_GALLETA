<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre del curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <img src="https://via.placeholder.com/600x300" alt="Imagen del Curso" class="img-fluid my-4">
            
            <table class="table table-bordered mx-auto w-50">
                <tr>
                    <th>Nombre del curso:</th>
                    <td>Microsoft Word Básico</td>
                </tr>
                <tr>
                    <th>Duración:</th>
                    <td>4 Semanas</td>
                </tr>
                <tr>
                    <th>Categoría:</th>
                    <td>Programación</td>
                </tr>
                <tr>
                    <th>Modalidad:</th>
                    <td>En línea</td>
                </tr>
                <tr>
                    <th>Descripción:</th>
                    <td>Aprende a utilizar las herramientas básicas de Microsoft Word para crear y editar documentos.</td>
                </tr>
                <tr>
                    <th>Requisitos:</th>
                    <td>No se requieren conocimientos previos.</td>
                </tr>
                <tr>
                    <th>Precio:</th>
                    <td>₡250,000.</td>
                </tr>
            </table>

            <div class="d-flex justify-content-center mt-4">
                <a href="javascript:history.back()" class="btn btn-primary mx-2">Regresar</a>
                <a href="../Iniciarsesion.php" class="btn btn-primary mx-2">Matricular</a>
            </div>
        </div>
    </div>

    <main></main>

    <?php include "../shared/footer.php"; ?>
</body>

</html>
