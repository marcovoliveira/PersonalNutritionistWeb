// Abrir modal ver plano e passar dados
$(document).on('click', '.view-modal', function () {

    $('.modal-title').html($(this).data('name'));

    $('.modal-breakfast').html($(this).data('breakfast'));
    var breakfast = $(this).data('breakfast');

    $('.modal-morning_snack').html($(this).data('morning_snack'));
    var morning_snack = $(this).data('morning_snack');

    $('.modal-morning_snack_one').html($(this).data('morning_snack_one'));
    var morning_snack_one = $(this).data('morning_snack_one');


    $('.modal-lunch').html($(this).data('lunch'));
    var lunch = $(this).data('lunch');

    $('.modal-snack_one').html($(this).data('snack_one'));
    var snack_one = $(this).data('snack_one');

    $('.modal-snack_two').html($(this).data('snack_two'));
    var snack_two = $(this).data('snack_two');

    $('.modal-diner').html($(this).data('diner'));
    var diner = $(this).data('diner');

    $('.modal-bedtime_snack').html($(this).data('bedtime_snack'));
    var bedtime_snack = $(this).data('bedtime_snack');

    $('.modal-recomendations').html($(this).data('recomendations'));
    var recomendations = $(this).data('recomendations');


    if (!breakfast) {
        $('.col-md-4.breakfast').hide();
        $('.modal-body.breakfast').hide();

    }
    else{
        $('.col-md-4.breakfast').show();
        $('.modal-body.breakfast').show();
    }

    if (!morning_snack) {
        $('.col-md-4.morning_snack').hide();
        $('.modal-body.morning_snack').hide();
    }
    else{
        $('.col-md-4.morning_snack').show();
        $('.modal-body.morning_snack').show();
    }

    if (!morning_snack_one) {
        $('.col-md-4.morning_snack_one').hide();
        $('.modal-body.morning_snack_one').hide();

    }
    else{
        $('.col-md-4.morning_snack_one').show();
        $('.modal-body.morning_snack_one').show();

    }
    if (!lunch) {
        $('.col-md-4.lunch').hide();
        $('.modal-body.lunch').hide();

    }
    else{
        $('.col-md-4.lunch').show();
        $('.modal-body.lunch').show();

    }

    if (!snack_one) {
        $('.col-md-4.snack_one').hide();
        $('.modal-body.snack_one').hide();
    }
    else{
        $('.col-md-4.snack_one').show();
        $('.modal-body.snack_one').show();
    }

    if (!snack_two) {
        $('.col-md-4.snack_two').hide();
        $('.modal-body.snack_two').hide();
    }
    else{
        $('.col-md-4.snack_two').show();
        $('.modal-body.snack_two').show();
    }

    if (!diner) {
        $('.col-md-4.diner').hide();
        $('.modal-body.diner').hide();
    }
    else{
        $('.col-md-4.diner').show();
        $('.modal-body.diner').show();
    }

    if (!bedtime_snack) {
        $('.col-md-4.bedtime_snack').hide();
        $('.modal-body.bedtime_snack').hide();
    }
    else{
        $('.col-md-4.bedtime_snack').show();
        $('.modal-body.bedtime_snack').show();
    }

    if (!recomendations) {
        $('.col-md-4.recomendations').hide();
        $('.modal-body.recomendations').hide();
    }
    else{
        $('.col-md-4.recomendations').show();
        $('.modal-body.recomendations').show();
    }

    $('#myViewModal').modal('show');
});

var id;
// Button apagar disabled
$(function() {
    $('.disabled-button-wrapper').tooltip();
});

$(document).on('click', '.edit-modal', function () {

    id = $(this).data('id');

    var name = $(this).data('name');
    $('#name').val(name);

    var breakfast = $(this).data('breakfast');
    $('#breakfast').val(breakfast);

    var morning_snack = $(this).data('morning_snack');
    $('#morning_snack').val(morning_snack);

    var morning_snack_one = $(this).data('morning_snack_one');
    $('#morning_snack_one').val(morning_snack_one);

    var lunch = $(this).data('lunch');
    $('#lunch').val(lunch);

    var snack_one = $(this).data('snack_one');
    $('#snack_one').val(snack_one);

    var snack_two = $(this).data('snack_two');
    $('#snack_two').val(snack_two);

    var diner = $(this).data('diner');
    $('#diner').val(diner);

    var bedtime_snack = $(this).data('bedtime_snack');
    $('#bedtime_snack').val(bedtime_snack);

    var recomendations = $(this).data('recomendations');
    $('#recomendations').val(recomendations);



    $('#myEditModal').modal('show');
});

$('.form-group.edit').on('submit', function() {
    var formAction = $('.form-group').attr('action');
    $('.form-group').attr('action', formAction + "/" + id);
});










