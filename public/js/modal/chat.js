$(document).on('click', '#go', function () {
    var data = $(this).data('id');
    window.location = "/admin/chat/"+data;

});
$(document).on('click', '#new', function (){

    var id = $('#nova').val();
    if(id == null){

    } else {
        window.location = "/admin/chat/"+id;
    }

});

$(function() {
    $('.speech-bubble-right').tooltip();
});
$(function() {
    $('.speech-bubble-left').tooltip();
});