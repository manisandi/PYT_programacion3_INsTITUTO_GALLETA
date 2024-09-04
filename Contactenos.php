<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <?php include './shared/header.php'; ?>
    <main>
        <section class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center mb-4">Contáctenos</h2>
                    <form id="frmContactenos" class="w-40 m-auto mx-5 my-5" action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="consulta" class="form-label">Consulta</label>
                            <select id="consulta" name="consulta" class="form-select" required>
                                <option value="" disabled selected>Seleccione una opción</option>
                                <option value="Cursos">Cursos</option>
                                <option value="Precios">Precios</option>
                                <option value="Horarios">Horarios</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="experiencia" class="form-label">¿Cómo fue tu experiencia?</label>
                            <textarea id="experiencia" name="experiencia" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
                            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="js/Contactenos.js"></script>

</body>
<?php include "./shared/footer.php"; ?>

</html>