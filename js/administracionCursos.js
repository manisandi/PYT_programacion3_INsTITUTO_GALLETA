$("#cursoForm").submit(function (e) {
    e.preventDefault();

    let formData = new FormData($(this)[0]);
    let images = ['imagen1', 'imagen2', 'imagen3']; // IDs de los campos de archivo

    let promises = images.map(function (id) {
        return new Promise(function (resolve, reject) {
            let fileInput = document.getElementById(id);
            let file = fileInput.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onloadend = function () {
                    let base64String = reader.result.replace("data:", "").replace(/^.+,/, "");
                    resolve({ name: id, base64: base64String });
                };
                reader.readAsDataURL(file);
            } else {
                resolve({ name: id, base64: null });
            }
        });
    });

    Promise.all(promises).then(function (results) {
        results.forEach(function (result) {
            if (result.base64) {
                formData.append(result.name, result.base64);
            }
        });

        $.ajax({
            type: 'POST',
            url: 'http://localhost:8080/guardarcurso',
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                msgBox('Datos Guardados correctamente', 'info');
            },
            error: function (xhr, status, error) {
                console.log(error);
                msgBox('Error al guardar los datos', 'error');
            }
        });
    });
});

function msgBox(mensaje, icono) {
    Swal.fire({
        title: "Mensaje",
        text: mensaje,
        icon: icono,
        confirmButtonText: "Aceptar"
    });
}
