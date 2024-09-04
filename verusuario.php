<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>

    
</head>
<body>
    <h2 class="my-5 mx-5"></h2>
    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight"></div>
            <div class="p-2 bd-highlight">
                <a href="CrearUsuario.php" class="btn btn-secondary"><i class="fas fa-plus"></i> Datos de usuario</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Whatsapp</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Fotografia</th>
                    </tr>
                </thead>
                <tbody id="datosTabla"></tbody>
            </table>
        </div>
    </div>


