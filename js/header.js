$("#btnSearch").click(function (e) { 
    let txtBuscar=$("#txtBuscar").val();
    location.href=`resultados.php?txtBuscar=${txtBuscar}`;
});
