<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Incluir jQuery desde un CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <?php include './shared/header.php'; ?>
    <main>
        <section class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center mb-4">Registrar Usuario</h2>
                    <form id="frmUsuario" class="w-40 m-auto mx-5 my-5" action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="cedula" class="form-label">Cédula</label>
                            <input type="text" class="form-control" id="cedula" name="cedula">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="primer_apellido" class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido">
                        </div>
                        <div class="mb-3">
                            <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido">
                        </div>
                        <div class="mb-3">
                            <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo_electronico" name="correo_electronico">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="numero_whatsapp" class="form-label">WhatsApp</label>
                            <input type="tel" class="form-control" id="numero_whatsapp" name="numero_whatsapp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="fotografia" class="form-label">Subir Foto</label>
                            <input type="file" class="form-control" id="fotografia" name="fotografia" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
                            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
            <!-- Incluir tu archivo JavaScript personalizado -->
    <script src="js/CrearUsuario.js"></script> <!-- Asegúrate de reemplazar con la ruta correcta -->
    </main>
    <?php include "./shared/footer.php"; ?>
</body>
</html>

