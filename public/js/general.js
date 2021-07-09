$.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '< Ant',
    nextText: 'Sig >',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: 'yy-mm-dd',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['es']);

$(document).ready(function(){
    $('.datepicker').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-60:+0"
    });

    $("#btnCrearPelicula").on("click",function(){
        $("#modalPelicula").modal("show");
    });
    $("#btnCerrarModalPelicula").on("click", function(){
        $("#titulo").val("");
        $("#resumen").val("");
        $("#genero").val("");
        $("#duracion").val("");
        $("#director").val("");
        $("#urlubicacion").val("");
        $("#clasificacion").val("");
        $("#anioestreno").val("");
        $("#modalPelicula").modal("hide");
    });
    $(".calificarPelicula").on("click", function(){
        var idPelicula = $(this).attr("idpelicula");
        $("#idpelicula").val(idPelicula);
        $("#modalCalificar").modal("show");
    });
    $("#btnCerrarCalificacion").on("click", function(){
        $("#calificacion").val("");
        $("#idpelicula").val("");
        $("#modalCalificar").modal("hide");
    });
});