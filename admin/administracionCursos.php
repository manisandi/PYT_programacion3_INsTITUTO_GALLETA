<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php include '../shared/headerAdmin.php'; ?>
    <div class="container my-5">
        <h2>Agregar Curso</h2>
        <form id="cursoForm"  class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">  
            <div class="mb-3">
                <label for="Identificador" class="form-label">Identificador</label>
                <input type="text" class="form-control" id="Identificador" name="Identificador" required>
            </div>
            <div class="mb-3">
                <label for="nombreCurso" class="form-label">Nombre del Curso</label>
                <input type="text" class="form-control" id="nombreCurso" name="nombreCurso" required>
            </div>
            <div class="mb-3">
                <label for="duracion" class="form-label">Duración</label>
                <input type="text" class="form-control" id="duracion" name="duracion" required>
            </div>
            <div class="mb-3">
                <label for="modalidad" class="form-label">Modalidad</label>
                <input type="text" class="form-control" id="modalidad" name="modalidad" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="mb-3">
                <label for="nombrePromotor" class="form-label">Nombre del Promotor</label>
                <input type="text" class="form-control" id="nombrePromotor" name="nombrePromotor" required>
            </div>
            <div class="mb-3">
                <label for="telefonoPromotor" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefonoPromotor" name="telefonoPromotor" required>
            </div>
            <div class="mb-3">
                <label for="whatsappPromotor" class="form-label">WhatsApp</label>
                <input type="tel" class="form-control" id="whatsappPromotor" name="whatsappPromotor" required>
            </div>
            <div class="mb-3">
                <label for="correoPromotor" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correoPromotor" name="correoPromotor" required>
            </div>
            <!-- Galería de imágenes -->
            <div class="mb-3">
                <label class="form-label">Galería de Imágenes</label>
                <div class="row">
                    <div class="col-md-4">
                        <input type="file" class="form-control" id="imagen1" name="imagen1" accept="image/*">
                    </div>
                    <div class="col-md-4">
                        <input type="file" class="form-control" id="imagen2" name="imagen2" accept="image/*">
                    </div>
                    <div class="col-md-4">
                        <input type="file" class="form-control" id="imagen3" name="imagen3" accept="image/*">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="../admin/verCursos.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
        </form>
    </div>
    <script src="../js/administracionCursos.js"></script>
</body>

</html>
