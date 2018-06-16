function Registrar()
{
    var cedu = $("#cedula").val();
    var nom = $("#nombre").val();
    var fech = $("#fecha").val();
    var carg = $("#cargo").val();
    $("#respuesta").html("<img src="loader.gif" /> Por favor espera un momento");
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: "registro.php",
        data: "cedula="+cedu+"&nombre="+nom+"&fecha="+fech+"&cargo="+carg,
        success: function(resp){
            $('#respuesta').html(resp);
            Limpiar();
            Cargar();
        }
    });
}
