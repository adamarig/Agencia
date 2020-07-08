function obtenerReservaciones(){
    $.ajax({
        url: "../php/obtenerReservaciones.php",
        type: "post",
        processData: false,
        success: function(result){
            var producto = JSON.parse(result);
            for(var i=1; i<producto.length; i++){
                var cadena ='<tr><th scope="row">'+producto[i].numPersonas+'</th><td>'+producto[i].tipoHabitacion+'</td><td>'+producto[i].fechaLlegada+'</td><td>'+producto[i].fechaSalida+'</td><td>'+producto[i].precio+'</td><td style="display: none;">'+producto[i].idCliente+'</td><td style="display: none;">'+producto[i].idReservacion+'</td>';
                if(producto[i].status=="Vigente" || producto[i].status=="vigente"){
                    cadena = cadena+'<td><button type="button" class="btn btn-warning" onClick="btnEditarReservacion('+producto[i].fechaLlegada+','+producto[i].fechaSalida+','+producto[i].numPersonas+','+producto[i].idCliente+','+producto[i].idReservacion+')"><i class="fas fa-edit"></i></button>     <button type="button" class="btn btn-danger" onClick="btnCancelarReservacion('+producto[i].idReservacion+')"><i class="fas fa-trash-alt"></i></button>     <button type="button" class="btn btn-info" onClick="btnPagarReservacion('+producto[i].precio+')"><i class="far fa-credit-card"></i></button></td></tr>';
                }else{
                    cadena = cadena+'<td><button type="button" class="btn btn-warning" onClick="btnEditarReservacion('+producto[i].fechaLlegada+','+producto[i].fechaSalida+','+producto[i].numPersonas+','+producto[i].idCliente+','+producto[i].idReservacion+')"><i class="fas fa-edit"></i></button>     <button type="button" class="btn btn-danger" onClick="btnCancelarReservacion('+producto[i].idReservacion+')"><i class="fas fa-trash-alt"></i></button></td></td></tr>';    
                }
                $('#pintarFilas').append(cadena);
            }
        }
    });


    function btnCancelarReservacion(i){
        var numReservacion = i;
        $.ajax({
            url: "../php/variableSesionReservacionCancelada.php",
            data: {'numReservacion': numReservacion},
            type: "post",
            cache: false,
            success: function(result){
                alert (result);
                $('#modalConfirmarCancelarReservacion').modal();
            }
        });
    }
    function confirmarCancelarReservacion(){
        $.ajax({
            url: "../php/confirmarCancelarReservacion.php",
            type: "post",
            cache: false,
            success: function(result){
                alert (result);
                location.href="reservaciones.html";
                //$('#modalConfirmarEliminarCliente').modal();
            }
        });
    }

    function btnEditarReservacion(a, b, c, d, e){
        $('#overlay1').css('display', 'flex');
        $('#txtFechaLlegada1').val(a);
        $('#txtFeachaSalida1').val(b);
        $('#txtNumeroPersonas1').val(c);
        $('#txtIdCliente1').val(d);
        $('#txtIdReservacion').val(e);
    }
    function btnActualizarReservacion(){
        var form = new FormData(document.getElementById("formularioModificarReservacion"));
        $.ajax({
            url: "../php/actualizarReservacion.php",
            type: "post",
            data: form,
            cache: false,
            contentType: false,
            processData: false,
            success: function(result){
                alert(result);
                location.href= "reservaciones.html";
            }
        });
    }