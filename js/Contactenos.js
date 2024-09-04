document.addEventListener('DOMContentLoaded', function () {
    const guardarButton = document.getElementById('guardar');

    if (guardarButton) {
        guardarButton.addEventListener('click', function () {
            const datos = $("#frmContactenos").serialize();
            peticionGuardar(datos);
        });
    }
});

function peticionGuardar(datos) {
    const url = `http://localhost:8080/contactenos?${datos}`;
    $.ajax({
        type: "POST",
        url: url,
        success: function (res) {
            console.log("Datos guardados correctamente");
            alert("Datos Guardados");
            $("#frmContactenos")[0].reset(); // Limpiar el formulario
        },
        error: function (xhr, status, error) {
            alert("Error al guardar los datos: " + xhr.responseText);
        }
    });
}
