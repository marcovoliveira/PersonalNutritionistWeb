$(document).ready(function() {

    //mensagens flash
    $("#flash-message").delay(2000).fadeTo(600, 0).slideUp(600, function(){
        $(this).delay(0).fadeOut();
    });

    //ordenar tabelas automaticamente desativado
    $('#dataTable').DataTable( {
        "order": []
    });




});



