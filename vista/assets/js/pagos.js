$("#formularioPagos").submit( function(event){
    event.preventDefault();

    var montoPagado = $("#montoPagado").val();
    var tipoPago=$("#tipoPago").val();
    var fechaPago =$("#fechaPago").val();

    if ( (montoPagado.length > 0) &&
        (tipoPago.length > 0) &&
        (fechaPago.length > 0)){

            $("#montoPagado").removeClass("is-invalid");
            $("#tipoPago").removeClass("is-invalid");
            $("#fechaPago").removeClass("is-invalid");

            var json = {
                "montoPagado":montoPagado,
                "tipoPago":tipoPago,
                "fechaPago":fechaPago
            }

            console.log(json);

    } else {
        if(montoPagado.length == 0){
            // SÍ EL INPUT NO TIENE NINGUN DATO
            $("#montoPagado").addClass("is-invalid");
        } else {
            // SÍ EL INPUT TIENE UN DATO
            $("#montoPagado").removeClass("is-invalid");
        }

        if(tipoPago.length == 0){
            $("#tipoPago").addClass("is-invalid");
        }else {
            // SÍ EL INPUT TIENE UN DATO
            $("#tipoPago").removeClass("is-invalid");
        }

        if(fechaPago.length == 0){
            $("#fechaPago").addClass("is-invalid");
        }else {
            // SÍ EL INPUT TIENE UN DATO
            $("#fechaPago").removeClass("is-invalid");
        }
    }

});
