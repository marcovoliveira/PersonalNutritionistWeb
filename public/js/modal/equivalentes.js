$( document ).ready(function() {
    $(document).on('click', '#adicionarAlimento', function () {

        var id = $(this).data('id');
        $('#id_hide').val(id);

        $('#alimentoEquivalente').modal('show');

    });

    $(document).on('click', '#createEquivalente', function () {
        $('#myEquivalenteModal').modal('show');
    });

    $(document).on('click', '#verAlimentos', function () {
        var id = $(this).data('id');



        if(id != null) {
        $.get("/admin/alimentos/"+id, function (response) {


            $('#here_table').empty();
            var content = "<table  width='50%'>";
            $.each(response, function (key, value) {

                content +=
                    '<tr><td width="70%">' +
                    '<o class="card-text"  id="nome'+value.id+'">'+value.name+'</o>'  +
                    '</td>'+
                    '<td>' +
                    '<p id="nomedois'+value.id+'">' +
                    ' <button type="delete" id="deleteSpecial" value ="'+value.id+'" data-special="'+value.id+'" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
                    '</p>' +
                    '</td></tr>'
                ;

            });
            content += "</table>";

            $('#here_table').append(content);

            console.log(response);

        });
        }

        $(document).one("click", "#deleteSpecial", function handler() {
            var el = this;

          var  special = $(this).data('special');


            if ($('#deleteSpecial').val() === special) {
                $('#deleteSpecial').remove();
            }

            $.ajaxSetup({
                header: $('meta[name="_token"]').attr('content')
            })

            $.ajax({
                type: 'GET',
                url: "/admin/equivalenteRemover/"+special,
                header: $('meta[name="_token"]').attr('content'),

                success: function( msg ) {
                    console.log(msg);
                    if ( msg.status === 'success' ) {

                        $('#nome'+special).remove();
                        $('#nomedois'+special).remove();
                        swal("Aviso!", "Alimento eliminado com sucesso!", "warning");
                        $(el).one('click', handler);

                    }
                },
                error: function( data ) {
                    console.log(data);
                    if ( data.status === 422 ) {
                        swal("Erro!", "Erro ao eleminar", "Error");
                    }
                }
            });


        });

        $('#verAlimentos').modal('show');
    });




    $(document).on('click', '#apagarEquivalente', function handler() {
        var el = this;
        var table = $('#dataTable').DataTable();
        var  idEquivalenteARemover = $(this).data('id');


        swal({
            title: "Tem a certeza que pretende eliminar o equivalente?",
            text: "Se eliminar o equivalente todos os alimentos associados serão perdidos.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {

                        setTimeout(function(){
                            $.ajaxSetup({
                                header: $('meta[name="_token"]').attr('content')
                            })

                            $.ajax({
                                type: 'GET',
                                url: "/admin/alimentoRemover/"+idEquivalenteARemover,
                                header: $('meta[name="_token"]').attr('content'),

                                success: function( msg ) {

                                    if ( msg.status === 'success' ) {


                                        table.row( $(el).parents('tr') ).remove().draw();

                                        swal("Equivalente eliminado com sucesso!", {
                                            icon: "success",
                                        });


                                    }
                                },
                                error: function( data ) {
                                    console.log(data);
                                    if ( data.status === 422 ) {
                                        swal("Erro!", "Erro ao eliminar", "Error");
                                    }
                                }
                            });

                        });

                } else {
                    swal("O equivalente não foi eliminado!");
                }
            });

    });



});