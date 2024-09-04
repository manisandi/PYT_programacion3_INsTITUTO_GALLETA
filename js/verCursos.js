cargarTabla();

function cargarTabla() {
    $("#datosTabla").html("");
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/obtenerTodosCursos",
        dataType: "JSON",
        success: function (res) {
            let filas = "";
            $.each(res, function (i, cursos) {
                filas += `
                            <tr>
                            <td>${cursos.Identificador}</td>
                                <td>${cursos.nombreCurso}</td>
                                <td>${cursos.duracion}</td>
                                <td>${cursos.modalidad}</td>
                                <td>${cursos.categoria}</td>
                                <td>${cursos.precio}</td>
                                <td>${cursos.nombrePromotor}</td>
                                <td>
                                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>        
                        `;
            });
            $("#datosTabla").html(filas);
        }
    });
    
}

document.querySelector("#datosTabla").addEventListener("click",(e)=>{
    if(e.target.classList.contains("btn-outline-warning") || 
    e.target.classList.contains("fa-pencil")){
        //variables de sesión
        sessionStorage.setItem("Identificador",e.target.closest("tr").childNodes[1].innerHTML)
        sessionStorage.setItem("nombreCurso",e.target.closest("tr").childNodes[3].innerHTML)
        sessionStorage.setItem("descripcion",e.target.closest("tr").childNodes[5].innerHTML)
        sessionStorage.setItem("categoria",e.target.closest("tr").childNodes[7].innerHTML)
        sessionStorage.setItem("precio",e.target.closest("tr").childNodes[9].innerHTML)
        sessionStorage.setItem("nombrePromotor",e.target.closest("tr").childNodes[11].innerHTML)
        sessionStorage.setItem("telefonoPromotor",e.target.closest("tr").childNodes[13].innerHTML)
        sessionStorage.setItem("whatsappPromotor",e.target.closest("tr").childNodes[15].innerHTML)
        location.href="administracionCursos.php";
    }else if(e.target.classList.contains("btn-outline-danger") || 
    e.target.classList.contains("fa-trash")){
        let Identificador=e.target.closest("tr").childNodes[1].innerHTML
        borrar(Identificador);
    }
})

function borrar(Identificador) {
    Swal.fire({
        title: "¿Esta Seguro que desea eliminar?",
        text: "Los datos no se podrán recuperar",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Si"
      }).then((result) => {
        if (result.isConfirmed) {
            procesarEliminar(Identificador);
        }
      });
}

function procesarEliminar(Identificador) {
    const url=`http://localhost:8080/borrarCurso/${Identificador}`
    $.ajax({
        type: "DELETE",
        url: url,
        success: function (res) {
        Swal.fire({
            title: "Mensaje",
            text: "Curso Eliminado Correctamente",
            icon: "success"
            });
        }
    });

}