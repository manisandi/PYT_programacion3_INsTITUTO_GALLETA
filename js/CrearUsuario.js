if (sessionStorage.getItem("cedula")!=null) {
    var cedula=sessionStorage.getItem("cedula");
    $("#cedula").val(sessionStorage.getItem("cedula"));
    $("#nombre").val(sessionStorage.getItem("nombre"));
    $("#primer_apellido").val(sessionStorage.getItem("primer_apellido"));
    $("#segundo_apellido").val(sessionStorage.getItem("segundo_apellido"));
    $("#correo_electronico").val(sessionStorage.getItem("correo_electronico"));
    $("#fecha_nacimiento").val(sessionStorage.getItem("fecha_nacimiento"));
    $("#telefono").val(sessionStorage.getItem("telefono"));
    $("#numero_whatsapp").val(sessionStorage.getItem("numero_whatsapp"));
    $("#password").val(sessionStorage.getItem("password"));


    
} else {
     cedula=-1
     sessionStorage.clear();
}

$("#guardar").click(function (e) {
    e.preventDefault();

    // Crear un objeto FormData para enviar los datos incluyendo archivos
    let formData = new FormData($("#frmUsuario")[0]);
    const accion = (cedula == -1) ? "guardarusuario" : "actualizarUsuario";
    const peticion = (cedula == -1) ? "POST" : "POST";
    console.log(cedula);

    $.ajax({
        type: peticion,
        url: `http://localhost:8080/${accion}`,
        data: formData,
        contentType: false,
        processData: false,
        success: function (res) {
            console.log(res);
            msgBox("Datos Guardados correctamente", "info");
        },
        error: function (xhr, status, error) {
            console.log(error);
            msgBox("Error al guardar los datos", "error");
        }
    });
});


function msgBox(mensaje,icono) { //info warning error
    Swal.fire({
        title: "Mensaje",
      text: mensaje,
        icon: icono,
        confirmButtonText: "Aceptar"
      });
}