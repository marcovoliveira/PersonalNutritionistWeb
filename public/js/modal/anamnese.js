$( document ).ready(function() {
    var id;
    $(document).on('click', '#criaranamnese', function () {
        $('#createanamnese').modal('show');

    });
});

$('.form-group.create').on('submit', function(e) {

    $.ajaxSetup({
        header: $('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

    $.ajax({
        type: "POST",
        url: "/admin/utente/create/anamnese/"+ $('#id_hide').val(),
        data:$(this).serialize(),
        dataType: 'json',
        success: function (anamnese) {

            $('#pflash').fadeIn('fast');
            $('#createanamnese').modal('hide');
            $("#pflash").html("<div id='flash-message'> <div class='alert alert-success'></button> <strong>Anamnese alimentar </strong> registada com sucesso! </div> </div>");


            setTimeout(function() {
                $('#pflash').fadeOut('slow');
            }, 3000);

            $('#formcreateanamnese')[0].reset();
        },
        error: function () {
            alert("Falha ao criar nova anamnese")
        }
    });
});