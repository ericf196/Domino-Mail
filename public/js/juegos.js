$(document).ready(function () {
    // $(".form-messages").hide();

    var contJugV = 0;
    var contJugHC = 0;

    var Select = [
        {
            Id: '',
            Nombre: '',
            Jugadores: [],
            Imagen: ''
        },
        {
            Id: '',
            Nombre: '',
            Jugadores: [],
            Imagen: ''
        }
    ];

    $(document).on('change', '.select-tabla', function () {

        var number = $('option:selected', this).attr('valopt');
        $(this).parent().parent().find("td:eq(3)").children().val(number);

        console.log($('option:selected', this).val());
        var selected = [];

        $(".select").each(function () {
            $(this).each(function () {
                if (($('option:selected', this).val()) != 0) {
                    selected.push(($('option:selected', this).val()));
                    // console.log(($('option:selected', this).val()));
                }
            });
        });

        $("option").prop("disabled", false);
        for (var index in selected) {
            $('option[value="' + selected[index] + '"]').prop("disabled", true);
        }
    });


    $(document).on('change', '.select', function () {

        var selected = [];

        $(".select").each(function () {
            $(this).each(function () {
                if (($('option:selected', this).val()) != 0) {
                    selected.push(($('option:selected', this).val()));
                }
            });
        });

        $("option").prop("disabled", false);
        for (var index in selected) {
            $('option[value="' + selected[index] + '"]').prop("disabled", true);
        }
    });


    $(document).on('click', '#submit_tabla', function () {

        var myTab = document.getElementById('tabla-super-polla-puntaje');

        var obj = '[';

        var header = 1;

        var rowLength = myTab.rows.length ;

        for (row = 1; row < rowLength; row++) {

            obj = obj + '{';
            var cellLength = myTab.rows[row].cells.length - 1;
            for (c = 1; c < myTab.rows[row].cells.length; c++) {
                var headers = myTab.rows.item(0).cells[header];
                //console.log(headers)
                var element = myTab.rows.item(row).cells[c];
                header++;
                obj = obj + '"' + headers.title + '" : "' + element.childNodes[0].textContent + '"';

                if (header <= cellLength) {
                    obj = obj + ','
                }
            }

            if (row !== rowLength - 1) {
                obj = obj + '},';
                header = 1;
            } else {
                obj = obj + '}';
            }

        }
        obj = obj + ']';


        var div_resul = "notificacion_tabla";
        // $("#submit_tabla").attr("disabled", "disabled");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

         console.log(obj);
        $.ajax({
            url: '/sent_table',
            data: obj,
            type: 'POST',
            dataType: 'json',

            //beforeSend: function () {
             //$("#" + div_resul + "").html($("#cargador_empresa").html());
            // $('button[type=submit]').attr("disabled", "disabled");
            // },
            success: function (resul) {
                $("#" + div_resul + "").html(resul);
            },
            error: function (xhr, status) {
                console.log(xhr)
                console.log(status)
                $("#" + div_resul + "").html('Ha ocurrido un error, revise su conexion e intentelo nuevamente');
            },
            complete: function () {
               // window.location.href = window.location.pathname;

                //$('button[type=submit]').removeAttr("disabled");

            }

        });
    });


    $(document).on("submit", ".formentrada_anun", function (e) {
        e.preventDefault();
        var idAnum = $(this).find('input[name="id_anun"]').val();
        var nombreform = $(this).attr("id");
        var varurl = $(this).attr("action");
        var div_resul = "notificacion_nueva_publicidad-" + idAnum;

        var formData = new FormData($("#" + nombreform + "")[0]);
        $.ajax({
            url: varurl,
            type: 'POST',
            // Form data
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function () {
                //$("#submit_nueva_publicidad" + idAnum + "").attr("disabled", "disabled");
                $("#" + div_resul + "").html($("#cargador_empresa").html());
            },
            success: function (data) {
                $("#" + div_resul + "").html(data);
                setTimeout(ocultarDiv, 7000);
                //$("#submit_nueva_publicidad").removeAttr("disabled");
            },
            error: function (data) {
                alert("ha ocurrido un error" + data);

            }
        });

        function ocultarDiv() {
            $("#" + div_resul + "").html("");
        }

    });


    function enabledSelect(element) { //Coloca los campos de los select disabled false para poderlos enviar por el form
        var selected = [];

        $(element).each(function () {
            $(this).each(function () {
                if (($('option:selected', this).val()) != 0) {
                    selected.push(($('option:selected', this).val()));
                    // console.log(($('option:selected', this).val()));
                }
            });
        });

        $("option").prop("disabled", false);
        for (var index in selected) {
            $('option[value="' + selected[index] + '"]').prop("disabled", false);
        }
    }


    $(document).on("submit", "#ajax-team", function (e) {
        e.preventDefault();

        var form = $('#ajax-team');
        var url = $('#ajax-team').attr('action');

        enabledSelect(".captain");

        var formData = {
            'captain': $('select[name=select1]').val(),
            'subCaptain': $('select[name=select2]').val(),
            'nameTeam': $('input[name=name-team]').val(),
            'selectMember1': $('select[name=select-member-1]').val(),
            'selectMember2': $('select[name=select-member-2]').val(),
            'selectMember3': $('select[name=select-member-3]').val(),
            'selectMember4': $('select[name=select-member-4]').val(),
            'selectMember5': $('select[name=select-member-5]').val(),
            'selectMember6': $('select[name=select-member-6]').val(),
            'selectMember7': $('select[name=select-member-7]').val(),
            'selectMember8': $('select[name=select-member-8]').val(),
            'selectMember9': $('select[name=select-member-9]').val(),
            'selectMember10': $('select[name=select-member-10]').val(),
            'selectMember11': $('select[name=select-member-11]').val()

        };

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: url, // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true,
            beforeSend: function (xhr) {
                $('#submit-team').attr("disabled", "disabled");
                $('.loader').css("display", "block");

            }
        })
        // using the done promise callback
            .done(function (data) {

                $('.loader').css("display", "none");

                $('.form-messages').text(data.message);
                $('.form-messages').fadeTo(2000, 500).slideUp(500, function () {
                    $('.form-messages').slideUp(500);
                });

                $divS = parseInt(($(".list-team").children().first()).attr('data-num-divs'));
                $divI = parseInt(($(".list-team").children().last()).attr('data-num-divs'));

                if ($divS) {
                    if ($divS !== $divI) {
                        ($divS > $divI) ? $num = $divS + 1 : $num = $divI + 1;
                    } else {
                        $num++;
                    }
                } else {
                    $num = 1;
                    $(".no-team").remove();
                }

                var accordion = '<div data-num-divs="' + $num + '" class="panel-group" id="accordion' + $num + '"><div class="panel panel-default"><div class="panel-heading"><div data-toggle="collapse" data-parent="#accordion" href="#collapse' + $num + '"><h4 class="panel-title">' + data.team.name + '</h4></div></div><div id="collapse' + $num + '" class="panel-collapse collapse">';

                if ((data.team.members).length > 0) {
                    accordion += ' <div class="panel-body"><ul>';
                    for (var i = 0; i < (data.team.members).length; i++) {
                        accordion += '<li>' + data.team.members[i].name + '</li>';
                    }
                    accordion += '</ul>';
                } else {
                    accordion += '<div class="panel-body text-center"><p>Este equipo no tiene jugadores</p>';
                }
                accordion += '</div></div></div></div>';


                $(".list-team").prepend(accordion);
                $(form)[0].reset();
                $("#submit-team").removeAttr("disabled");

            })
            .fail(function (data) {
                // console.log(data);
                $('#ajax-team').removeAttr("disabled");
                $('.form-messages').text(data.message);
                $(form)[0].reset();
            });
    });

    $(document).on('change', '.select-card', function (event) {


        if (event.target.id === 'homeClub') {
            $('#JugH').children().remove();
            $('#TotalJugHC').html("0");
            $('#contJugHC').html("0");
            contJugHC = 0;
        } else {
            $('#JugV').children().remove();
            $('#TotalJugV').html("0");
            $('#contJugV').html("0");
            contJugV = 0;
        }

        $contJug = 0;
        dataId = ($('option:selected', this).val());
        $select = $(this).attr('id');
        $list = ('<ul class="list">');
        if (dataId !== "0") {

            $.ajax({
                type: 'GET', // define the type of HTTP verb we want to use (POST for our form)
                url: 'json_batalla_escuderia/' + dataId, // the url where we want to POST
                data: dataId, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                encode: true,
            })
            // using the done promise callback
                .done(function (data) {

                    for (var i = 0; i < data.data.length; i++) {
                        $list += '<li class="list-item" value="' + data.data[i].id + '">' + data.data[i].name + '</li>';
                        $contJug++;
                    }

                    if ($select === 'homeClub') {
                        $('#JugH').append($list);
                        $('#TotalJugHC').html($contJug);
                    } else {
                        $('#JugV').append($list);
                        $('#TotalJugV').html($contJug);
                    }

                    $list += '</ul>';

                })
                .fail(function (data) {
                    console.log(data);
                });
        }

    });

    $(document).on('click', '.list-item', function (event) {

        if ($(this).parents(".ListJug")[0].id === "JugH") {
            if (!$(this).hasClass('selected-item')) {
                $(this).addClass('selected-item');
                contJugHC++;
                $("#contJugHC").html(contJugHC);
                console.log($(this).val());
                console.log($(this).text());
                Select[0].Jugadores.push($(this).text());
                Select[0].Jugadores.push($(this).val());
            } else {
                $(this).removeClass('selected-item');
                contJugHC--;
                $("#contJugHC").html(contJugHC);
                console.log($(this).val());
                console.log($(this).text());
                Select[0].Jugadores.splice(Select[0].Jugadores.indexOf($(this).text()), 2)
            }
        } else {
            if (!$(this).hasClass('selected-item')) {
                $(this).addClass('selected-item');
                contJugV++;
                $("#contJugV").html(contJugV);
                Select[1].Jugadores.push($(this).text());
                Select[1].Jugadores.push($(this).val());
                console.log($(this).val());
                console.log($(this).text());
            } else {
                $(this).removeClass('selected-item');
                contJugV--;
                $("#contJugV").html(contJugV);
                Select[1].Jugadores.splice(Select[0].Jugadores.indexOf($(this).text()), 2);
                console.log($(this).val());
                console.log($(this).text());
            }
        }


        //Validacion Boton
        if (contJugV >= 8 && contJugHC >= 8) {
            $("#submit_batalla_escuderia").removeAttr("disabled");
        } else {
            $("#submit_batalla_escuderia").attr("disabled", "disabled");
        }

        console.log(Select);

    });


    $(document).on("submit", ".submit_batalla_escuderia", function (e) {
        e.preventDefault();

        var varurl = "tabla_batalla_escuderia";
        var div_resul = "game_batalla_escuderia";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: varurl,
            type: 'POST',
            data: {"Seleccionados": JSON.stringify(Select)},
            dataType: 'html',
            // contentType: "json",

            beforeSend: function () {
                $('.submit_batalla_escuderia').attr("disabled", "disabled");
                $('.loader').css("display", "block");
            },

            success: function (data) {
                $('.loader').css("display", "none");
                $(".submit_batalla_escuderia").removeAttr("disabled");
                $("#" + div_resul + "").html(data);

            },
            error: function (data) {
                console.log("error")

            }
        });
    });


});