<body>

<style type="text/css">
    body {
        color: #8b8b8b;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    .tablecompl {
        border-spacing: 0px;
    }

    .tablecompl td, .tablecompl tr {
        border-bottom: 1px solid #ececec;
    }

    .tdG { /*td de color gris*/
        background-color: #eeeeee;
        padding: 8px;
    }

    .tdB { /*td de color Blanco*/
        background-color: #fff;
        padding: 1px;
    }

    .tdV { /*td de  color verde*/
        background-color: #3c8dbc;
        color: #fff;
        padding: 8px;
    }

    .tdA { /*td de  color Amarillo*/
        background-color: #fcf7af;
        padding: 8px;
    }

    .tdN { /*td de  color Naranja*/
        background-color: #ff9400;
        color: #fff;
        text-align: center;
    }

    .Med90 {
        width: 90%;
        font-size: 19px;
    }

    .nombreJG {
        width: 100%;
    }

    .PuntosC {
        color: red;
    }

    .PuntosF {
        color: green;
    }

    .rotate1 {
        display: inline-block;
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    .rotate2 {
        display: inline-block;
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
        -webkit-transform: rotate(-270deg);
        -ms-transform: rotate(-270deg);
        transform: rotate(-270deg);
    }

    .celdas:nth-child(odd) {
        background: #f9f9f9;
    }

    input {
        border: 0px solid #e8e8e8;
        background: transparent;
    }

    ::placeholder {
        color: #b7b7b7;
        opacity: 1;
    }

    :-ms-input-placeholder {
        color: #b7b7b7;
    }

    ::-ms-input-placeholder {
        color: #b7b7b7;
    }

    .px-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .Posicion {
        background-color: #ff9400;
        color: #fff;
        text-align: center;
    }

    .Posicionnombre {
        background-color: #3c8dbc;
        color: #000;
        padding-left: 5px;
    }
</style>

<div><!-- princ -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li id="home-tab" class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#juegoTab" role="tab">Juego</a>
        </li>
        <li id="profile-tab" class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#posicionTab" role="tab">Posicion de mesa </a>
        </li>
        <li id="profile-tab" class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#puntaje" role="tab">Puntaje</a>
        </li>
    </ul>

    <!-- Tab panels -->
    <div class="tab-content">
        <div class="tab-pane active" id="juegoTab" role="tabpanel">

            <div class="table-responsive">


                <table class="tablecompl">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <?php //cantidad de juegos Duplicados en bucle PHP
                        for ($i = 1; $i <= $juegos; $i++) {
                            echo '<td colspan="2" class="tdV">Juego ' . $i . '</td>';
                        }
                        ?>

                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="tdG">Pos.</td>
                        <td class="tdG">Mesa</td>
                        <td class="tdG"><span style="padding-right: 80px;"></span>Nombre<span
                                    style="padding-right: 80px;"></span>
                        </td>
                        <td class="tdG">No.</td>
                        <?php //cantidad de juegos Duplicados en bucle PHP
                        for ($i = 1; $i <= $juegos; $i++) {
                            echo '
					<td class="tdG" title="Puntos a Fabor.">F</td>
					<td class="tdG" title="Puntos en Contra.">C</td>
					';
                        }

                        ?>
                        <td class="tdV">J/G</td>
                        <td class="tdG">Efec.</td>
                    </tr>

                    <tr id="AgregarFila">
                        <td class="tdN"></td>
                        <td class="tdG"></td>
                        <td class="tdA"></td>
                        <td class="tdG" colspan="3">
                            <button type="button" id="BTNGuardar" style="display: none;">Guardar</button>
                            <button type="button" id="BTNSig" onclick="Sigiente(1)">Terminar Juego 1</button>
                    </tr>
                </table>


            </div>
            <br><br>

            <!-- Tabla 2 -->
            <br><br>
            <hr>
            <h1>Banca HomeClub</h1>
            <table class="tablecompl">
                <tr>
                    <td class="tdG">ID</td>
                    <td class="tdG"><span style="padding-right: 80px;"></span>Nombre<span
                                style="padding-right: 80px;"></span>
                    </td>
                    <?php //cantidad de juegos Duplicados en bucle PHP
                    for ($i = 1; $i <= $juegos; $i++) {
                        echo '
					<td class="tdG" title="Puntos a Fabor.">F</td>
					<td class="tdG" title="Puntos en Contra.">C</td>
					';
                    }

                    ?>
                    <td class="tdV">J/G</td>
                    <td class="tdG">Efec.</td>
                </tr>
                <tr id="TrBancaHc"></tr>
            </table>
            <!-- Tabla 2 -->
            <!-- Tabla 3 -->
            <br><br>
            <hr>
            <h1>Banca Visitantes</h1>
            <table class="tablecompl">
                <tr>
                    <td class="tdG">ID</td>
                    <td class="tdG"><span style="padding-right: 80px;"></span>Nombre<span
                                style="padding-right: 80px;"></span>
                    </td>
                    <?php //cantidad de juegos Duplicados en bucle PHP
                    for ($i = 1; $i <= $juegos; $i++) {
                        echo '
					<td class="tdG" title="Puntos a Fabor.">F</td>
					<td class="tdG" title="Puntos en Contra.">C</td>
					';
                    }

                    ?>
                    <td class="tdV">J/G</td>
                    <td class="tdG">Efec.</td>
                </tr>
                <tr id="TrBancaV"></tr>
            </table>
        </div>

        <div class="tab-pane" id="puntaje" role="tabpanel">
            <br>
            <div class="table-responsive">
                <!-- Tabla 3 -->
                <br><br>
                <hr>
                <br><br>
                <table class="tablecompl">
                    <tr>
                        <td class="tdG">Pos.</td>
                        <td class="tdG"><span></span>Nombre y Apellido<span></span></td>
                        <td class="tdV">J/J</td>
                        <td class="tdV">J/G</td>
                        <td class="tdV">J/P</td>
                        <td class="tdV">PTOS +</td>
                        <td class="tdV">PTOS -</td>
                        <td class="tdV">AVE</td>
                        <td class="tdG">Efec.</td>
                        <td class="tdV">Pro</td>
                        <td class="tdV">Z+</td>
                        <td class="tdV">Pro</td>
                    </tr>
                    <tr id="AgregarFila2">
                    </tr>
                </table>
            </div>
        </div>

        <br><br>
        <hr>
        <br><br>

        <div class="tab-pane" id="posicionTab" role="tabpanel">
            <br>
            <span id="AgregarFila4"></span>


            <br><br>
            <hr>
            <br><br>
            <span id="AgregarFila3"></span>
        </div>
    </div>
</div><!-- /princ -->
</body>

<script type="text/javascript">
    var juegos = '<?php echo $juegos;?>';
</script>
<!--<script type="text/javascript" src="jquery-1.11.1.min.js"></script>-->
<script type="text/javascript">
    var Select =<?php echo $_POST['Seleccionados']; ?>;
    console.log("------------");
    console.log(Select);
//    console.log(select1);
    var CantJue = juegos;
    var PosLis = 1;//posicion en la lista
    var IdNum = 1;//posicion en la mesa
    var Puesto = 1;//puesto en la mesa
    var htmlSelec0 = '';
    var htmlSelec1 = '';
    var ReglaPos = [[0, 6, 1, 7, 2, 8, 3, 9, 4, 10, 5, 11], /*Definido por defecto en el aleatorio*/
        [1, 10, 5, 9, 3, 11, 4, 7, 2, 6, 0, 8],
        [2, 9, 5, 11, 0, 6, 3, 10, 1, 8, 4, 7],
        [0, 10, 4, 7, 1, 11, 2, 8, 3, 6, 5, 9],
        [2, 8, 4, 10, 0, 6, 5, 11, 1, 9, 3, 7],
    ];
//    console.log(ReglaPos);
    RegSupPol();

    function RegSupPol() {
        var PosMesa = '';
        for (var y = 12; y > 0; y--) {
            PM = IdNum % 4;//posicion en mesa
            if (PM == 1) {
                PosMesa = Puesto + "A";
                $('#AgregarFila3').before('<table style="background-image: url(\'mesa-domino.png\'); background-size:100%; background-repeat: no-repeat; width: 300px; height: 300px; float: left;"><tr><td></td><td style="text-align: center;"><h3><span type="text" id="Sillanombre' + IdNum + '"></span><br> ' + Puesto + 'A</h3></td><td></td></tr><tr >	<td style="text-align: center;"><h3 class="rotate1"><span type="text" id="Sillanombre' + (IdNum + 1) + '"></span><br> ' + Puesto + 'B</h3></td>	<td ></td>	<td style="text-align: center;"><h3 class="rotate2"><span type="text" id="Sillanombre' + (IdNum + 3) + '"></span><br> ' + Puesto + 'D</h3></td></tr><tr>	<td></td>	<td style="text-align: center;"><h3><span type="text" id="Sillanombre' + (IdNum + 2) + '"></span><br> ' + Puesto + 'C</h3></td>	<td></td></tr></table>');

                $('#AgregarFila4').before('<span style="border: solid; margin-left: 5px;"><span class="Posicion">' + Puesto + 'A </span> 	<b><span class="Posicionnombre" id="Snombre' + IdNum + '"></span></b></span><span style="border: solid; margin-left: 5px;" ><span class="Posicion">' + Puesto + 'B </span> <b><span class="Posicionnombre" id="Snombre' + (IdNum + 1) + '"></span></b></span><span style="border: solid; margin-left: 5px;"><span  class="Posicion">' + Puesto + 'C </span> <b><span class="Posicionnombre" id="Snombre' + (IdNum + 2) + '"></span></b></span><span style="border: solid; margin-left: 5px;" ><span  class="Posicion">' + Puesto + 'D </span> <b><span class="Posicionnombre" id="Snombre' + (IdNum + 3) + '"></span></b></span>');
            } else if (PM == 2) {
                PosMesa = Puesto + "B";
            } else if (PM == 3) {
                PosMesa = Puesto + "C";
            } else if (PM == 0) {
                PosMesa = Puesto + "D";
                Puesto++;//contador de 4 en 4
            }
            TrIni = '<tr class="celdas TablaPrin" id="TR' + IdNum + '"><td class="tdN">' + IdNum + '</td><td class="tdG">' + PosMesa + '</td><td class="px-2"><select type="text" name="nombreJG' + IdNum + '" class="nombre nombreJG" id="nombreJG' + IdNum + '" placeholder="Identificacion" IdNum="' + IdNum + '"></select></td><td class="tdG"><input type="text" name="No' + IdNum + '" class="No Med90" id="No' + IdNum + '" No="F' + IdNum + '" maxlength="3" placeholder="No."></td>';
            Bucle = '';
            for (var i = 1; i <= CantJue; i++) {
                clase = '';
                if ((PM = IdNum % 4) == 1) {
                    clase = 'PuntosA' + i;
                }

                Bucle = Bucle + '<td><input type="text" name="PuntosF' + IdNum + '" class="' + clase + ' numeros PuntosF Med90" id="PuntosF' + i + '' + IdNum + '" placeholder="F' + i + '" maxlength="3" Conti="' + i + '" IdNum="' + IdNum + '" disabled></td><td><input type="text" name="PuntosC' + IdNum + '" class="' + clase + ' numeros PuntosC Med90" id="PuntosC' + i + '' + IdNum + '" placeholder="C' + i + '" maxlength="3" Conti="' + i + '" IdNum="' + IdNum + '" disabled></td>';
            }
            TrFin = '<td class="tdV"><input type="number" class="JG Med90" id="JG' + IdNum + '" value="0" disabled></td><td class="tdG"><input type="number" class="Efec Med90" id="Efec' + IdNum + '" value="0" disabled></td></tr>';

            $('#AgregarFila').before(TrIni + Bucle + TrFin);//imprimo el nuevo registro
            $('#AgregarFila2').before('<tr class="celdas" id="posiciones' + IdNum + '"><td>' + IdNum + '</td><td><span style="padding-right: 80px;"><input type="text" name="CnombreJG' + IdNum + '" id="CnombreJG' + IdNum + '" disabled></td><td><input type="number" class="Med90" id="CJJ' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="CJG' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="CJP' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="PuntF' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="PuntC' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="AVE' + IdNum + '" value="0" disabled></td><td class="tdG"><input type="number" class="Med90" id="CEfec' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="Pro1' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="ZF' + IdNum + '" value="0" disabled></td><td><input type="number" class="Med90" id="Pro2' + IdNum + '" value="0" disabled></td>/tr>');

            IdNum++;//incremento el numero de la lista en 1
        }
        $('#nombreJG' + (parseInt(IdNum))).focus();//foco al nuevo registro a llenar
        recargaCod();
    }
    function recargaCod() {//reinstancia de cod


        $('.numeros').on({//validacion numericos
            "change": function (event) {
                $(event.target).val(function (index, value) {
                    return value.replace(/\D/g, "");
                });
                if (($(this).attr('IdNum') % 4) == 1) {
                    autoCompletado($(this).attr('Conti'), $(this).attr('IdNum'))
                }
                CuentaReg($(this).attr('Conti'), $(this).attr('IdNum'));
            }

        });
        $('.nombre').on({//replicar
            "click": function (event) {
                SValueAnt = $(this).val();
                SIdNumAnt = $(this).attr('idnum');
                SNameAnt = $('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text();
            },
            "change": function (event) {
                /*Modificar los select para validar las opciones */
                cambioBanca($('#TRBanca' + $(this).val()).attr('NumBanca'), SIdNumAnt, SNameAnt, SValueAnt);
                if ($(this).attr('IdNum') % 2) {
                    BancaHc.push(SNameAnt);
                    BancaHc.splice(BancaHc.indexOf($('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text()), 1);
                    BancaHcAle.push($('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text());
                    BancaHcAle.splice(BancaHc.indexOf(SNameAnt), 1);
                    for (var i = 1; i <= 12; i += 2) {
                        ValorId = $('#nombreJG' + i).val();
                        ValorName = $('#nombreJG' + $('#nombreJG' + i).attr('IdNum') + ' option:selected').text();
                        htmlSelec0 = '<option value="' + ValorId + '">' + ValorName + '</option>';
                        $('#nombreJG' + i).html('');
                        for (var o = 0; o < BancaHc.length; o++) {
                            htmlSelec0 += '<option value="' + Select[0].Jugadores[Math.round(Select[0].Jugadores.indexOf(BancaHc[o]) + 1)] + '">' + Select[0].Jugadores[Select[0].Jugadores.indexOf(BancaHc[o])] + '</option>';
                        }
                        $('#nombreJG' + i).html(htmlSelec0);
                    }
                    // console.log(BancaHc);
                    // console.log(BancaHcAle);
                    ////////////////FALTA CAMBIO DE PUNTAJES PARA ESTOS JUGADORES DE LOS SELECT
                } else {
                    BancaV.push(SNameAnt);
                    BancaV.splice(BancaV.indexOf($('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text()), 1);
                    BancaVAle.push($('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text());
                    BancaVAle.splice(BancaV.indexOf(SNameAnt), 1);
                    for (var i = 2; i <= 12; i += 2) {
                        ValorId = $('#nombreJG' + i).val();
                        ValorName = $('#nombreJG' + $('#nombreJG' + i).attr('IdNum') + ' option:selected').text();
                        htmlSelec1 = '<option value="' + ValorId + '">' + ValorName + '</option>';
                        $('#nombreJG' + i).html('');
                        for (var o = 0; o < BancaV.length; o++) {
                            htmlSelec1 += '<option value="' + Select[1].Jugadores[Math.round(Select[1].Jugadores.indexOf(BancaV[o]) + 1)] + '">' + Select[1].Jugadores[Select[1].Jugadores.indexOf(BancaV[o])] + '</option>';
                        }
                        $('#nombreJG' + i).html(htmlSelec1);
                    }
                    // console.log(BancaV);
                    // console.log(BancaVAle);
                    ////////////////FALTA CAMBIO DE PUNTAJES PARA ESTOS JUGADORES DE LOS SELECT
                }
                $('#CnombreJG' + $(this).attr('IdNum')).val($('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text());
                $('#Sillanombre' + $(this).attr('IdNum')).text($('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text());
                $('#Snombre' + $(this).attr('IdNum')).text($('#nombreJG' + $(this).attr('IdNum') + ' option:selected').text());//Si se quiere mostrar el nombre
                // $('#Snombre'+$(this).attr('IdNum')).text($("#No"+$(this).attr('IdNum')).val());//Si se quiere mostrar el no
            }
        });

    }
    function CuentaReg(Conti, IdNum) {
        // console.log(Conti+','+IdNum);
        CantJG = 0;
        cont = 1;
        CantEfec = 0;
        JueJug = 0;
        PuntF = 0;
        PuntC = 0;
        ZF = 0;
        ZC = 0;
        PuntoFinal = 0;
        $("#TR" + IdNum + " .numeros").each(function () {
            if ($('#PuntosF' + cont + '' + IdNum).val() && $('#PuntosC' + cont + '' + IdNum).val()) {
                if (parseInt($('#PuntosF' + cont + '' + IdNum).val()) >= 100) {
                    CantJG++;
                }
                if (parseInt($('#PuntosF' + cont + '' + IdNum).val()) == 0) {
                    ZC++;
                } else if (parseInt($('#PuntosC' + cont + '' + IdNum).val()) == 0) {
                    ZF++;
                }

                CantEfec = parseInt(CantEfec) + (parseInt($('#PuntosF' + cont + '' + IdNum).val()) - parseInt($('#PuntosC' + cont + '' + IdNum).val()));
                PuntF = PuntF + parseInt($('#PuntosF' + cont + '' + IdNum).val());
                PuntC = PuntC + parseInt($('#PuntosC' + cont + '' + IdNum).val());
                JueJug++;
                //console.log('#PuntosF'+cont+''+IdNum);
            }
            cont++;
        });
        $('#JG' + IdNum).val(CantJG);//juegos ganados
        $('#CJG' + IdNum).val(CantJG);
        $('#CJP' + IdNum).val(JueJug - CantJG);//juegos perdidos
        $('#Efec' + IdNum).val(CantEfec);//efecto causado
        $('#AVE' + IdNum).val(CantEfec);
        $('#CJJ' + IdNum).val(JueJug);//juegos jugados
        if (JueJug) {
            $('#CEfec' + IdNum).val(Math.round((CantJG * 1000) / JueJug));
            /*efect*/
        }
        $('#PuntF' + IdNum).val(PuntF);//puntos+
        $('#PuntC' + IdNum).val(PuntC);//puntos-
        if (JueJug) {
            $('#Pro1' + IdNum).val(Math.round(PuntF / JueJug));
            /*Pro1*/
        }
        $('#ZF' + IdNum).val(ZF);//Z+
        $('#ZC' + IdNum).val(ZC);//Z-
        if (IdNum == 1) {
            PuntoFinal = 6;
        } else if (IdNum == 2) {
            PuntoFinal = 5;
        } else if (IdNum == 3) {
            PuntoFinal = 4;
        } else if (IdNum == 4) {
            PuntoFinal = 3;
        } else if (IdNum == 5) {
            PuntoFinal = 2.5;
        } else if (IdNum == 6) {
            PuntoFinal = 2;
        } else if (IdNum == 7) {
            PuntoFinal = 1.5;
        } else if (IdNum == 8) {
            PuntoFinal = 1;
        } else if (IdNum == 9) {
            PuntoFinal = 0.5;
        }
        $('#Pro2' + IdNum).val(1 + (CantJG * 2) + ((JueJug - CantJG) * (-1)) + (ZF * 1) + PuntoFinal);//Z-
    }
    C = 1;

    function Sigiente(vC) {
//alert(C);
        ContCampos = 0;
        for (var i = 1; i < IdNum; i++) {//creo el numero de posiciones disponibles
            if ($('#nombreJG' + i).val()) {//cuento solo los registrsos con nombres
                ContCampos++;
            }
        }
        CamposSobrantes = ContCampos % 4;
        while (CamposSobrantes != 0) {
            $('#PuntosF' + C + '' + ContCampos).val('100');
            $('#PuntosC' + C + '' + ContCampos).val('50');
            CuentaReg(C, ContCampos);

            ContCampos--;
            CamposSobrantes = ContCampos % 4;
        }
        CatVacio = 0;
        $(".PuntosA" + C).each(function () {
            if (!$(this).val()) {
                CatVacio++;
            }
        });
        if (CatVacio == 0) {
            //alert(C);
            // BTNTXT='Terminar Juego'+(C+1);
            // if (C>CantJue){
            // 	BTNTXT='Terminar';
            // }
            $("#BTNSig").text('Terminar Juego' + (C + 1));
            habilitarCampos();
            ReordenArray(vC);
        }
    }
    var Numjueg = 0;
    function ReordenArray(numvC) {
        Numjueg += numvC;
        if (Numjueg < 5) {
            for (var i = 0; i < 12; i++) {
                // $().val(BancaHcAle[i]);
                console.log(ReglaPos[Numjueg][i]);
                if (ReglaPos[Numjueg][i] < 6) {
                    $('#nombreJG' + Math.round(i + 1)).html('');
                    console.log(BancaHcAle[ReglaPos[Numjueg][i]]);
                    $('#nombreJG' + Math.round(i + 1)).append('<option value="' + Select[0].Jugadores[Math.round(Select[0].Jugadores.indexOf(BancaHcAle[ReglaPos[Numjueg][i]]) + 1)] + '">' + BancaHcAle[ReglaPos[Numjueg][i]] + '</option>');
                    $('#nombreJG' + Math.round(i + 1)).append(htmlSelec0);
                    $('#CnombreJG' + Math.round(i + 1)).val(BancaHcAle[ReglaPos[Numjueg][i]]);
                    $('#Snombre' + Math.round(i + 1)).text(BancaHcAle[ReglaPos[Numjueg][i]]);
                    $('#Sillanombre' + Math.round(i + 1)).text(BancaHcAle[ReglaPos[Numjueg][i]]);
                } else {
                    $('#nombreJG' + Math.round(i + 1)).html('');
                    console.log(BancaVAle[ReglaPos[Numjueg][i] - 6]);
                    $('#nombreJG' + Math.round(i + 1)).append('<option value="' + Select[1].Jugadores[Math.round(Select[1].Jugadores.indexOf(BancaVAle[ReglaPos[Numjueg][i] - 6]) + 1)] + '">' + BancaVAle[ReglaPos[Numjueg][i] - 6] + '</option>');
                    $('#nombreJG' + Math.round(i + 1)).append(htmlSelec1);
                    $('#CnombreJG' + Math.round(i + 1)).val(BancaVAle[ReglaPos[Numjueg][i] - 6]);
                    $('#Snombre' + Math.round(i + 1)).text(BancaVAle[ReglaPos[Numjueg][i] - 6]);
                    $('#Sillanombre' + Math.round(i + 1)).text(BancaVAle[ReglaPos[Numjueg][i] - 6]);
                }
            }
        }

    }
    function habilitarCampos() {
        C++;
        $(".PuntosA" + C).removeAttr('disabled');
        $(".PuntosA" + Math.round(C - 1)).attr('disabled', 'disabled');
        if (C > CantJue) {
            $("#BTNSig").hide();
            $("#BTNGuardar").removeAttr('style');

        }
    }

    var BancaHc = [];
    var BancaV = [];
    var BancaHcAle = [];
    var BancaVAle = [];
    var Lista = 6;
    aleatorio();
    function aleatorio() {

        for (var i = 0; i < 2; i++) {//separar las bancas por equipo
            for (var o = 0; o < Select[i].Jugadores.length; o += 2) {
                if (i == 0) {
                    BancaHc.push(Select[i].Jugadores[o]);
                } else {
                    BancaV.push(Select[i].Jugadores[o]);
                }
            }
        }
        for (var i = 0; i < Lista; i++) {
            Numlistahc = BancaHc.length;
            Numlistav = BancaV.length;
            var NumAleHc = Math.floor((Math.random() * Numlistahc))//numero a eliminar
            // alert(NumAleHc)//numero a eliminar
            var NumAleV = Math.floor((Math.random() * Numlistav))//numero a eliminar
            // alert(NumAleV)//numero a eliminar
            BancaHcAle.push(BancaHc[NumAleHc])
            BancaVAle.push(BancaV[NumAleV])
            BancaHc.splice(NumAleHc, 1)
            BancaV.splice(NumAleV, 1)
        }
        var Options0 = '';
        for (var i = 0; i < BancaHc.length; i++) {
            Options0 += '<option value="' + Select[0].Jugadores[Math.round(Select[0].Jugadores.indexOf(BancaHc[i]) + 1)] + '">' + Select[0].Jugadores[Select[0].Jugadores.indexOf(BancaHc[i])] + '</option>';
        }
        var Options1 = '';
        for (var i = 0; i < BancaV.length; i++) {
            Options1 += '<option value="' + Select[1].Jugadores[Math.round(Select[1].Jugadores.indexOf(BancaV[i]) + 1)] + '">' + Select[1].Jugadores[Select[1].Jugadores.indexOf(BancaV[i])] + '</option>';
        }
        var PosCont = 1;
        for (var i = 0; i < 6; i++) {
            // $().val(BancaHcAle[i]);
            $('#nombreJG' + Math.round(PosCont)).append('<option value="' + Select[0].Jugadores[Math.round(Select[0].Jugadores.indexOf(BancaHcAle[i]) + 1)] + '">' + Select[0].Jugadores[Select[0].Jugadores.indexOf(BancaHcAle[i])] + '</option>');
            $('#nombreJG' + Math.round(PosCont)).append(Options0);
            $('#CnombreJG' + Math.round(PosCont)).val(BancaHcAle[i]);
            $('#Snombre' + Math.round(PosCont)).text(BancaHcAle[i]);
            $('#Sillanombre' + Math.round(PosCont)).text(BancaHcAle[i]);
            PosCont++;
            // $('#nombreJG'+Math.round(PosCont)).val(BancaVAle[i]);
            $('#nombreJG' + Math.round(PosCont)).append('<option value="' + Select[1].Jugadores[Math.round(Select[1].Jugadores.indexOf(BancaVAle[i]) + 1)] + '">' + Select[1].Jugadores[Select[1].Jugadores.indexOf(BancaVAle[i])] + '</option>');
            $('#nombreJG' + Math.round(PosCont)).append(Options1);
            // $('#nombreJG'+Math.round(PosCont)).append('<option value="'+i+'">'+BancaVAle[i]+'</option>');
            $('#CnombreJG' + Math.round(PosCont)).val(BancaVAle[i]);
            $('#Snombre' + Math.round(PosCont)).text(BancaVAle[i]);
            $('#Sillanombre' + Math.round(PosCont)).text(BancaVAle[i]);
            PosCont++;
        }
        $("#BTNSig").removeAttr('style');
        $(".PuntosA1").removeAttr('disabled');
        // alert($('#nombreJG1').val());
        htmlSelec0 = Options0;
        htmlSelec1 = Options1;
        // console.log(Select[0].Jugadores);
        // console.log(BancaHc);
        var IdNumCont = IdNum;
        for (var o = 0; o < BancaHc.length; o++) {
            TrIni = '<tr class="celdas TablaPrin" id="TRBanca' + Select[0].Jugadores[Math.round(Select[0].Jugadores.indexOf(BancaHc[o]) + 1)] + '" NumBanca="' + IdNumCont + '"><td class="tdN">' + IdNumCont + '</td><td class="px-2"><input type="text" id="nameBanca' + IdNumCont + '" value="' + BancaHc[o] + '" disabled></td>';
            Bucle = '';
            for (var i = 1; i <= CantJue; i++) {
                clase = '';
                if ((PM = IdNumCont % 4) == 1) {
                    clase = 'PuntosBancaA' + i;
                }

                Bucle = Bucle + '<td><input type="text" name="PuntosFBanca' + IdNumCont + '" class="' + clase + ' numeros PuntosFBanca Med90" id="PuntosFBanca' + i + '' + IdNumCont + '" placeholder="F' + i + '" maxlength="3" Conti="' + i + '" IdNumCont="' + IdNumCont + '" disabled></td><td><input type="text" name="PuntosCBanca' + IdNumCont + '" class="' + clase + ' numeros PuntosCBanca Med90" id="PuntosCBanca' + i + '' + IdNumCont + '" placeholder="C' + i + '" maxlength="3" Conti="' + i + '" IdNumCont="' + IdNumCont + '" disabled></td>';
            }
            TrFin = '<td class="tdV"><input type="number" class="JG Med90" id="JG' + IdNumCont + '" value="0" disabled></td><td class="tdG"><input type="number" class="Efec Med90" id="Efec' + IdNumCont + '" value="0" disabled></td></tr>';

            $('#TrBancaHc').before(TrIni + Bucle + TrFin);
            IdNumCont++;
        }
        for (var o = 0; o < BancaV.length; o++) {
            TrIni = '<tr class="celdas TablaPrin" id="TRBanca' + Select[1].Jugadores[Math.round(Select[1].Jugadores.indexOf(BancaV[o]) + 1)] + '" NumBanca="' + IdNumCont + '"><td class="tdN">' + IdNumCont + '</td><td class="px-2"><input type="text" id="nameBanca' + IdNumCont + '" value="' + BancaV[o] + '" disabled></td>';
            Bucle = '';
            for (var i = 1; i <= CantJue; i++) {
                clase = '';
                if ((PM = IdNumCont % 4) == 1) {
                    clase = 'PuntosBancaA' + i;
                }

                Bucle = Bucle + '<td><input type="text" name="PuntosFBanca' + IdNumCont + '" class="' + clase + ' numeros PuntosFBanca Med90" id="PuntosFBanca' + i + '' + IdNumCont + '" placeholder="F' + i + '" maxlength="3" Conti="' + i + '" IdNumCont="' + IdNumCont + '" disabled></td><td><input type="text" name="PuntosCBanca' + IdNumCont + '" class="' + clase + ' numeros PuntosCBanca Med90" id="PuntosCBanca' + i + '' + IdNumCont + '" placeholder="C' + i + '" maxlength="3" Conti="' + i + '" IdNumCont="' + IdNumCont + '" disabled></td>';
            }
            TrFin = '<td class="tdV"><input type="number" class="JG Med90" id="JG' + IdNumCont + '" value="0" disabled></td><td class="tdG"><input type="number" class="Efec Med90" id="Efec' + IdNumCont + '" value="0" disabled></td></tr>';

            $('#TrBancaV').before(TrIni + Bucle + TrFin);
            IdNumCont++;
        }

    }
    function cambioBanca(E, F, Nameant, IDant) {//Entra - Fila
        var VariC = [];
        for (var i = 0; i < CantJue; i++) {
            // console.log(E+','+F);
            VariC.push([$("#PuntosF" + Math.round(i + 1) + "" + F).val(), $("#PuntosC" + Math.round(i + 1) + "" + F).val()]);
            $("#PuntosF" + Math.round(i + 1) + "" + F).val($("#PuntosFBanca" + Math.round(i + 1) + "" + E).val())
            $("#PuntosC" + Math.round(i + 1) + "" + F).val($("#PuntosCBanca" + Math.round(i + 1) + "" + E).val())
            $("#PuntosFBanca" + Math.round(i + 1) + "" + E).val(VariC[i][0])
            $("#PuntosCBanca" + Math.round(i + 1) + "" + E).val(VariC[i][1])
        }
        // console.log(Select[1].Jugadores[Math.round(Select[1].Jugadores.indexOf(BancaV[o])+1)]);
        $("#nameBanca" + E).val(Nameant)
        $("#TRBanca" + $("#nombreJG" + F).val()).attr('id', 'TRBanca' + IDant);
        // console.log($("#nombreJG"+F).val())
        // console.log(IDant)
        // console.log(Nameant)
        CuentaReg(1, F);
        // console.log(VariC)

    }
    function autoCompletado(C, N) {
        $("#PuntosF" + C + "" + N).val();
        $("#PuntosC" + C + "" + N).val();

        $("#PuntosF" + C + "" + Math.round(parseInt(N) + parseInt(1))).val($("#PuntosC" + C + "" + N).val());
        $("#PuntosC" + C + "" + Math.round(parseInt(N) + parseInt(1))).val($("#PuntosF" + C + "" + N).val());
        CuentaReg("", $("#PuntosF1" + Math.round(parseInt(N) + parseInt(1))).attr('IdNum'));
        $("#PuntosF" + C + "" + Math.round(parseInt(N) + parseInt(2))).val($("#PuntosF" + C + "" + N).val());
        $("#PuntosC" + C + "" + Math.round(parseInt(N) + parseInt(2))).val($("#PuntosC" + C + "" + N).val());
        CuentaReg("", $("#PuntosF1" + Math.round(parseInt(N) + parseInt(2))).attr('IdNum'));
        $("#PuntosF" + C + "" + Math.round(parseInt(N) + parseInt(3))).val($("#PuntosC" + C + "" + N).val());
        $("#PuntosC" + C + "" + Math.round(parseInt(N) + parseInt(3))).val($("#PuntosF" + C + "" + N).val());
        CuentaReg("", $("#PuntosF1" + Math.round(parseInt(N) + parseInt(3))).attr('IdNum'));

    }
    //imprimo el nuevo registro
</script>
</html>
