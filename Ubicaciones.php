<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        /* Estilo para mantener la relación de aspecto 21:9 */
        .aspect-ratio-box {
            position: relative;
            width: 100%;
            padding-top: 42.857%; /* (9/21)*100 = 42.857% */
        }
        
        .aspect-ratio-box iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>

<body>
    <?php include './shared/header.php'; ?>

    <main>
        <div class="card w-60 p-1">
            <div class="card">
                <div class="card-title content text-center">
                    Encuentra Nuestras Sedes.
                </div>
            </div>
            <div class="aspect-ratio-box">
                <iframe src="https://storage.googleapis.com/maps-solutions-t91gw7w295/locator-plus/hwxg/locator-plus.html" loading="lazy"></iframe>
            </div>
        </div>
    </main>

    <?php include "./shared/footer.php"; ?>
</body>

</html>
