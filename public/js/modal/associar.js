var id;
$(document).on('click', '#edit', function () {
    var plano = $( "#plano" ).val();




    if(plano !== "Escolher plano...") {

        $.ajax({
            method: 'GET',
            url: "/admin/obterplano",
            datatype: "json",
            data: {planId: plano},


            success: function (plano) {

                id = plano.id;

                var name = plano.name;
                $('#name').val(name);

                var breakfast = plano.breakfast;
                $('#breakfast').val(breakfast);

                var morning_snack = plano.morning_snack;
                $('#morning_snack').val(morning_snack);

                var morning_snack_one = plano.morning_snack_one;
                $('#morning_snack_one').val(morning_snack_one);

                var lunch = plano.lunch;
                $('#lunch').val(lunch);

                var snack_one = plano.snack_one;
                $('#snack_one').val(snack_one);

                var snack_two = plano.snack_two;
                $('#snack_two').val(snack_two);

                var diner = plano.dinerplano;
                $('#diner').val(diner);

                var bedtime_snack = plano.bedtime_snack;
                $('#bedtime_snack').val(bedtime_snack);

                var recomendations = plano.recomendations;
                $('#recomendations').val(recomendations);

                $('#myEditModal').modal('show');
            },


            error: function () {
                alert("Não é possivel editar este plano");
            }
        });
    }
});
            /*
            Agora é necessario que apos a edição do plano não exista nehum redirecionamento
            Ou seja terei que remover este on submit aqui em baixo e criar um ajax para fazer
            post/update daquilo que alterei!
             */


$('.form-group.edit').on('submit', function(e) {
    $.ajaxSetup({
        header: $('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

    $.ajax({
        type: "POST",
        url: "plan/edit/"+id,
        data:$(this).serialize(),
        dataType: 'json',
        success: function (plan) {
            $('#plano').val(plan.id).find('option:selected').text(plan.name);
            $('#myEditModal').modal('hide');
        },
        error: function () {
            alert("Falha ao editar o plano")
        }
    });
});

$(document).on('click', '#create', function () {
    $('#createPlan').modal('show');
});
$('.form-group.create').on('submit', function(e) {
    $.ajaxSetup({
        header: $('meta[name="_token"]').attr('content')
    });
    e.preventDefault(e);

    $.ajax({
        type: "POST",
        url: "plan/create",
        data:$(this).serialize(),
        dataType: 'json',
        success: function (result) {
            $('#plano').append($('<option>', {
                value: result.id,
                text: result.name
            }));

            $('#formgroupcreate')[0].reset();

            $('#createPlan').modal('hide');


        },
        error: function () {
            alert("Falha ao editar o plano")
        }
    });
});