$( document ).ready(function() {

    // Abrir modals de edits -- Editar informação pessoal
    $(document).on('click', '#editarpersonalinformation', function () {
        $('#edituser').modal('show');
    });

    //Editar informação clinica
    $(document).on('click', '#editarinformacaoclinica', function () {
        $('#editclinica').modal('show');
    });

    //Editar informação nutricional
    $(document).on('click', '#editarinformacaonutricional', function () {
        $('#editnutricional').modal('show');
    });

    //Editar informação atividades
    $(document).on('click', '#edithorariosatividades', function () {
        $('#editatividades').modal('show');
    });
    //Editar consulta
    $(document).on('click', '#editarconsulta', function(){
        var id = $(this).data('id');
        $('#id').val(id);

        var height = $(this).data('height');
        $('#height').val(height);

        var weight = $(this).data('weight');
        $('#weight').val(weight);

        var visceral_fat = $(this).data('visceral_fat');
        $('#visceral_fat').val(visceral_fat);

        var fat_mass = $(this).data('fat_mass');
        $('#fat_mass').val(fat_mass);

        var waist_perimeter = $(this).data('waist_perimeter');
        $('#waist_perimeter').val(waist_perimeter);

        var hip_permieter = $(this).data('hip_permieter');
        $('#hip_permieter').val(hip_permieter);

        var recomendations = $(this).data('recomendations');
        $('#recomendations').val(recomendations);




       $('#editconsultas').modal('show');
    });


    $(document).on('click', '#editaranamnesealimentar', function () {
        $('#editanamnese').modal('show');

    });

    $(document).on('click', '#criarinformacaoclinica', function () {
        $('#createclinica').modal('show');

    });

    $(document).on('click', '#criarinformacaonutricional', function () {
        $('#createnutricional').modal('show');

    });

    $(document).on('click', '#criarinformacaonutricional', function () {
        $('#createnutricional').modal('show');

    });

    $(document).on('click', '#criarhorariosatividades', function () {
        $('#createatividades').modal('show');

    });

    $(document).on('click', '#criaranamnese', function () {
        $('#createanamnese').modal('show');

    });
    //Detalhes consulta
    $(document).on('click', '#detalhesconsulta', function(){
        var id = $(this).data('id');
        $('#id').val(id);

        var date = $(this).data('created_at');
        $('#data').text(date);

        var height = $(this).data('height');
        $('#peso').text(height);

        var weight = $(this).data('weight');
        $('#altura').text(weight);

        var visceral_fat = $(this).data('visceral_fat');
        $('#gordura_visceral').text(visceral_fat);

        var fat_mass = $(this).data('fat_mass');
        $('#massa_gorda').text(fat_mass);


        var waist_perimeter = $(this).data('waist_perimeter');
        $('#perimetro_cintura').text(waist_perimeter);

        var hip_permieter = $(this).data('hip_permieter');
        $('#Perimetro_anca').text(hip_permieter);

        var physical_activity = $(this).data('physical_activity');
        $('#physical_activity').text(physical_activity);


        var objectivity = $(this).data('objectivity');
        $('#objectivity').text(objectivity);


        var imc = $(this).data('imc');
        $('#imc').text(imc);


        var basal_metabolism = $(this).data('basal_metabolism');
        $('#basal_metabolism').text(basal_metabolism);

        var energy_needs = $(this).data('energy_needs');
        $('#energy_needs').text(energy_needs);


        var waist_perimeter_risk = $(this).data('waist_perimeter_risk');
        $('#waist_perimeter_risk').text(waist_perimeter_risk);

        var hc_recomendation = $(this).data('hc_recomendation');
        $('#hc_recomendation').text(hc_recomendation);

        var p_recomendation = $(this).data('p_recomendation');
        $('#p_recomendation').text(p_recomendation);

        var f_recomendation = $(this).data('f_recomendation');
        $('#f_recomendation').text(f_recomendation);


        var recomendations = $(this).data('recomendations');
        $('#recomendacoes').text(recomendations);




        $('#detalhesconsulta').modal('show');
    });


    $(document).on('click', '#veranamnese', function(){
        var breakfast_hour = $(this).data('breakfast_hour');
        $('#breakfast_hour').text(breakfast_hour);

        var breakfast = $(this).data('brk');
        $('#brk').text(breakfast);

        var morning_snack_hour = $(this).data('morning_snack_hour');
        $('#msh').text(morning_snack_hour);

        var morning_snack = $(this).data('morning_snack');
        $('#ms').text(morning_snack);

        var lunch_hour = $(this).data('lunch_hour');
        $('#lh').text(lunch_hour);

        var lunch = $(this).data('lunch');
        $('#l').text(lunch);

        var snack_one_hour = $(this).data('snack_one_hour');
        $('#soh').text(snack_one_hour);

        var snack_one = $(this).data('snack_one');
        $('#so').text(snack_one);

        var snack_two_hour = $(this).data('snack_two_hour');
        $('#sth').text(snack_two_hour);

        var snack_two = $(this).data('snack_two');
        $('#st').text(snack_two);

        var diner_hour = $(this).data('diner_hour');
        $('#dh').text(diner_hour);

        var diner = $(this).data('diner');
        $('#d').text(diner);

        var bedtime_snack_hour = $(this).data('bedtime_snack_hour');
        $('#bedtime_snack_hour').text(bedtime_snack_hour);

        var bedtime_snack = $(this).data('bedtime_snack');
        $('#bedtime_snack').text(bedtime_snack);

        var snacks = $(this).data('snacks');
        $('#snacks').text(snacks);



        $('#detalhesanamnese').modal('show');
    });



});