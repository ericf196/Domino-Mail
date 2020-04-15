<style type="text/css">
	body {
		color: #8b8b8b;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	}

	.tablecompl {
		border-spacing: 0px;
	}

	.tablecompl td,
	.tablecompl tr {
		border-bottom: 1px solid #ececec;
	}

	.tdG {
		/*td de color gris*/
		background-color: #eeeeee;
		padding: 8px;
	}

	.tdB {
		/*td de color Blanco*/
		background-color: #fff;
		padding: 1px;
	}

	.tdV {
		/*td de  color verde*/
		background-color: #3c8dbc;
		color: #fff;
		padding: 8px;
	}

	.tdA {
		/*td de  color Amarillo*/
		background-color: #fcf7af;
		padding: 8px;
	}

	.tdN {
		/*td de  color Naranja*/
		background-color: #ff9400;
		color: #fff;
		text-align: center;
	}

	.nombreJG {
		width: 100%;
	}

	.PuntosC {
		color: red;
		width: 100%;
	}

	.PuntosF {
		color: green;
		width: 100%;
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

	.numero-tabla {
		background-color: #ff9400b8;
		text-align: center;
		color: #fff;
	}


	select {
		border: 0px;
		background: transparent;
	}

	select:focus,
	select:hover {
		border: 0px;
	}

	/* ultimos estilos para los numeros y mesas */

	.container-table-player {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 70px;
		border-radius: 5px;
		padding: 0;
		border: 1px solid black;
		margin: 10px;
	}

	.item-number {
		grid-column: 1;
		background: #ff9400;
		font-size: 20px;
		display: flex;
		align-items: center;
		justify-content: center;
		color: white;
	}

	.item-table {
		grid-column: 2;
		font-size: 20px;
		display: flex;
		align-items: center;
		justify-content: center;
		color: black;
	}

	.container-table-player {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 70px;
		border-radius: 5px;
		padding: 0;
		border: 1px solid black;
		margin: 10px;
	}

	/* ultimos estilos para los numeros y mesas */
</style>

<?php
 $optionNombre='<option value="0">--Seleccionar--</option>';
 foreach ($jugadores as $jugador){
      $optionNombre.= '<option valOpt="'.$jugador->id.'" value="'.$jugador->id.'">'.$jugador->name.'</option>';
 }

 $optionNombre = str_replace("'", "\'", $optionNombre);
?>

<script>

    let optionNombre2 = '<?php echo $optionNombre ?>';
    /*let options = ' <option value="0">Seleccione</option><option value="1">Alberto</option><option value="2">Jose</option><option value="3">Maria</option><option value="4">Pedro</option><option value="5">Miguel</option><option value="6">Mariana</option><option value="7">Vicente</option><option value="8">Adolfo</option><option value="9">Belkis</option>';
    options += ' <option value="10">Dennys</option><option value="11">Enrique</option> <option value="12">Lucas</option><option value="13">Benito</option><option value="14">Teolimar</option><option value="15">Arminda</option><option value="16">Aura</option><option value="17">Ines</option><option value="18">Douglas</option><option value="19">Jormincha</option>';
    options += ' <option value="20">Roman</option><option value="21">Alejandra</option><option value="22">Sonia</option><option value="23">Maritza</option><option value="24">Jhonatan</option><option value="25">Belen</option><option value="26">Mercedes</option><option value="27">Monica</option><option value="28">Kimberly</option>';*/
</script>

<select id="select-ronda">
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
</select>


<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#juego" role="tab" aria-controls="juego"
		   aria-selected="true">Juego</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="profile-tab" data-toggle="tab" href="#posiciones" role="tab"
		   aria-controls="posiciones" aria-selected="false">Posicion en Mesa</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="puntaje-tab" data-toggle="tab" href="#puntaje" role="tab" aria-controls="puntaje"
		   aria-selected="false">Puntaje</a>
	</li>
</ul>

<div class="tab-content" id="myTabContent">
	<div class="tab-pane active" id="juego" role="tabpanel">
		<table id="tabla-super-polla" data-ronda-en-juego="0">
			<thead>
			<tr id="ronda-juego">
				<th colspan="4"></th>
				<th colspan="2" class="tdV">Juego 1</th>
				<th colspan="2" class="tdV">Juego 2</th>
				<th colspan="2" class="tdV">Juego 3</th>
				<th colspan="2" class="tdV">Juego 4</th>
				<th colspan="2" class="tdV last-ronda-juego">Juego 5</th>
				<th colspan="2"></th>
			</tr>
			<tr id="ronda-Puntos">
				<th class="tdG">Pos.</th>
				<th class="tdG">Mesa</th>
				<th class="tdG">Nombre</th>
				<th class="tdG">No.</th>
				<th class="tdG" title="Puntos a Fabor.">F</th>
				<th class="tdG" title="Puntos en Contra.">C</th>
				<th class="tdG" title="Puntos a Fabor.">F</th>
				<th class="tdG" title="Puntos en Contra.">C</th>
				<th class="tdG" title="Puntos a Fabor.">F</th>
				<th class="tdG" title="Puntos en Contra.">C</th>
				<th class="tdG" title="Puntos a Fabor.">F</th>
				<th class="tdG" title="Puntos en Contra.">C</th>
				<th class="tdG" title="Puntos a Fabor.">F</th>
				<th class="tdG" title="Puntos en Contra.">C</th>
				<th class="tdV">J/G</th>
				<th id="head-avg" class="tdG">AVG</th>
			</tr>
			</thead>
			<tbody>
			<tr class="row-game">
				<td class="tdN">1</td>
				<td class="tdG">Mesa</td>
				<td class="tdG">
					<select class="select">
						<!--script>document.write(optionNombre2)</script-->
					</select>
				</td>
				<td class="numero-tabla">No.</td>
				<td data-ronda="1" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="1" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="2" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="2" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="3" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="3" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="4" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="4" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="5" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="5" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td class="jg">0</td>
				<td class="avg">0</td>
			</tr>
			<tr class="row-game">
				<td class="tdN">2</td>
				<td class="tdG">Mesa</td>
				<td class="tdG">
					<select class="select">
						<!--script>document.write(optionNombre2)</script-->
					</select>
				</td>
				<td class="numero-tabla">No.</td>
				<td data-ronda="1" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="1" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="2" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="2" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="3" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="3" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="4" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="4" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="5" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="5" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td class="jg">0</td>
				<td class="avg">0</td>
			</tr>
			<tr class="row-game">
				<td class="tdN">3</td>
				<td class="tdG">Mesa</td>
				<td class="tdG">
					<select class="select">
						<script></script>
					</select>
				</td>
				<td class="numero-tabla">No.</td>
				<td data-ronda="1" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="1" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="2" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="2" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="3" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="3" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="4" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="4" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="5" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="5" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td class="jg">0</td>
				<td class="avg">0</td>
			</tr>
			<tr class="row-game">
				<td class="tdN">4</td>
				<td class="tdG">Mesa</td>
				<td class="tdG">
					<select class="select">
						<!--script>document.write(optionNombre2)</script-->
					</select>
				</td>
				<td class="numero-tabla">No.</td>
				<td data-ronda="1" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="1" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="2" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="2" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="3" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="3" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="4" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="4" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td data-ronda="5" data-puntos="F"><input type="number" class="PuntosF" disabled /></td>
				<td data-ronda="5" data-puntos="C"><input type="number" class="PuntosC" disabled /></td>
				<td class="jg">0</td>
				<td class="avg">0</td>
			</tr>
			</tbody>
		</table>

		<button id="button-add" type="button" class="btn btn-success">Añadir</button>
		<button id="button-mix" type="button" class="btn btn-prymary" disabled="disabled">Mezclar 2</button>
		<button id="button-start" type="button" class="btn btn-prymary" disabled="disabled">Iniciar Ronda 3</button>

		<button id="button-order" type="button" class="btn btn-warning" disabled="disabled">Order 4</button>

        <input id="submit_tabla" type="button" class="btn btn-primary BTNGuardar" value="Guardar"/>
	</div>

	<div class="tab-pane" id="posiciones" role="tabpanel" aria-labelledby="profile-tab">
		<div id="container-players" class="row">
			<!--Espacio donde se Añade las mesas y los numeros de jugadores-->
		</div>
	</div>

	<div class="tab-pane" id="puntaje" role="tabpanel">

		<table id="tabla-super-polla-puntaje" style="width: 100%;">
			<thead>
			<tr id="ronda-Puntos-puntaje">
				<th class="tdG" title="Pos.">Pos.</th>
				<th class="tdG" title="IDJUGADOR">Id Jugador</th>
				<th class="tdG" title="Nombre">Nombre</th>
				<th class="tdV" title="J/J">J/J</th>
				<th id="head-jg-puntaje" class="tdV" title="J/G">J/G</th>
				<th class="tdV" title="J/P">J/P</th>
				<th class="tdV" title="PTOS P">PTOS P</th>
				<th class="tdV" title="PTOS N">PTOS N</th>
				<th id="head-avg-puntaje" class="tdV" title="AVG" colspan="5">Avg</th>
				<th class="tdG" title="EFEC" colspan="5">EFEC</th>
				<th class="tdV" title="PRO">PRO</th>
				<th class="tdV" title="Z">Z</th>
				<th class="tdV" title="PRO2">PRO2</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>

	</div>
</div>

<script type="text/javascript">

    $( document ).ready(function() {
		$(".select").append(optionNombre2)
	});

    $(document).on('click', '#button-order', function (event) {

        let juego = $("#tabla-super-polla")[0].dataset.rondaEnJuego
        let cell = 2 * juego + 2
        let row = $('table#tabla-super-polla tbody tr:nth-child( 4n + 1 )')

        $.each(row, function (index, value) {
            $(this)[0].cells[cell].children[0].disabled = true
            $(this)[0].cells[cell + 1].children[0].disabled = true
            $(this)[0].classList.remove("line-writer")
            $(this)[0].cells[cell].children[0].classList.remove("input-puntos")
            $(this)[0].cells[cell + 1].children[0].classList.remove("input-puntos")
        });

        //Ordenamiento de la tabla Principal
        let table = $('table#tabla-super-polla')
        let headAvg = document.getElementById("head-avg")
        let avg = $('table#tabla-super-polla thead #ronda-Puntos th').index(headAvg)
        //console.log(table.find('tr:gt(0)'))
        var rowsJueGan = table.find('tr:gt(1)').toArray().sort(comparer(avg - 1))
        rowsJueGan = rowsJueGan.reverse()
        var rowsJueGanCopy = [...rowsJueGan]
        var rowsAvg = rowsJueGanCopy.sort(comparerModificado(avg))

        for (var i = 0; i < rowsAvg.length; i++) {
            table.append(rowsAvg[i])
        }

        //Ordenamiento de la tabla de los puntajes generales
        let tablePuntuacion = $('table#tabla-super-polla-puntaje')
        let headAvgPuntaje = document.getElementById("head-avg-puntaje")
        let headJgPuntaje = document.getElementById("head-jg-puntaje")
        let avgPuntaje = $('table#tabla-super-polla-puntaje thead #ronda-Puntos-puntaje th').index(headAvgPuntaje)
        let jgPuntaje = $('table#tabla-super-polla-puntaje thead #ronda-Puntos-puntaje th').index(headJgPuntaje)
        console.log(avgPuntaje)
        //return
        var rowsJueGanPuntuacion = tablePuntuacion.find('tr:gt(0)').toArray().sort(comparer(jgPuntaje))
        rowsJueGanPuntuacion = rowsJueGanPuntuacion.reverse()
        var rowsJueGanPuntuacionCopy = [...rowsJueGanPuntuacion]
        var rowsAvgPuntuacion = rowsJueGanPuntuacionCopy.sort(comparerModificado(avgPuntaje, jgPuntaje))

        $('table#tabla-super-polla-puntaje tbody tr').remove();
        for (var i = 0; i < rowsAvgPuntuacion.length; i++) {
            tablePuntuacion.append(rowsAvgPuntuacion[i])
        }

        posicionesYMesas($("#tabla-super-polla")[0].rows)
        numeroYMesa($('table#tabla-super-polla tbody')[0])

        $("#button-start").prop('disabled', false)
        $("#button-order").prop('disabled', true)

    })

    $(document).on('change', '#select-ronda', function (event) {
        if (event.target.value) {
            for (var i = 6; i <= event.target.value; i++) {
                let count = $("#ronda-Puntos").children().length - 2

                const elementRow = `<th colspan="2" class="tdV last-ronda-juego">Juego ${i}</th>`
                $('.last-ronda-juego').last().after(elementRow)

                const elementRowGame = `<th class="tdG" title="Puntos a Fabor.">F</th><th class="tdG" title="Puntos en Contra.">C</th>`
                $("#ronda-Puntos th:nth-child(" + count + ")").after(elementRowGame)

                $.each($(".row-game td:nth-child(" + count + ")"), function (index, value) {
                    const elementRowPoint = `<td data-ronda="${i}" data-puntos="F"><input type="number" class="PuntosF" disabled></td><td data-ronda="${i}" data-puntos="C"><input type="number" class="PuntosC" disabled></td>`
                    $(this).after(elementRowPoint)
                });
            }
        }
        event.target.disabled = true
    })

    $(document).on('click', '#button-start', function (event) {

        $('table#tabla-super-polla-puntaje tbody tr').remove(); //Borra los elementos de la tabla de puntaje para escribir los nuevos

        $("#tabla-super-polla")[0].dataset.rondaEnJuego = parseInt($("#tabla-super-polla")[0].dataset.rondaEnJuego) + 1
        let juego = $("#tabla-super-polla")[0].dataset.rondaEnJuego
        let cell = 2 * juego + 2
        let rowCount = $('table#tabla-super-polla tbody tr').length
        let row = $('table#tabla-super-polla tbody tr:nth-child( 4n + 1 )')

        $.each(row, function (index, value) {
            $(this)[0].cells[cell].children[0].disabled = false
            $(this)[0].cells[cell + 1].children[0].disabled = false
            $(this)[0].classList.add("line-writer")
            $(this)[0].cells[cell].children[0].classList.add("input-puntos")
            $(this)[0].cells[cell + 1].children[0].classList.add("input-puntos")
        });

        $('table#tabla-super-polla tbody tr:nth-child( 1 )')[0].cells[cell].children[0].focus()

        const result = rowCount % 4
        if (result != 0) {
            $("table#tabla-super-polla tbody tr:nth-last-child(" + result + ")").prev().nextAll()

            $.each($("table#tabla-super-polla tbody tr:nth-last-child(" + result + ")").prev().nextAll(), (index, value) => {
                if (index == 0) {
                    $(value)[0].cells[cell].children[0].classList.remove("input-puntos")
                    $(value)[0].cells[cell + 1].children[0].classList.remove("input-puntos")

                    $(value)[0].cells[cell].children[0].disabled = true
                    $(value)[0].cells[cell + 1].children[0].disabled = true
                }
                $(value)[0].cells[cell].children[0].value = 100
                $(value)[0].cells[cell + 1].children[0].value = 50

                //$(".input-puntos").trigger("focusout");
                const rowSum = $(value)[0].cells

                let JG = 0, JP = 0, PFavor = 0, PContra = 0, Z = 0
                Array.from(rowSum, (element, index) => {

                    if (index > 3 && index < rowSum.length - 2) {
                        const input = parseFloat($(element)[0].children[0].value)
                        if (!isNaN(input)) {
                            let bo = $(element)[0].dataset.puntos
                            if ($(element)[0].dataset.puntos == "C") {
                                PContra += parseFloat($(element)[0].children[0].value)
                                if (input >= 100) {
                                    JP += parseInt(1)
                                }
                                if (input == 0)
                                    Z += parseInt(1)
                            } else {
                                PFavor += parseFloat($(element)[0].children[0].value)
                                if (input >= 100) {
                                    JG += parseInt(1)
                                }
                            }
                        }
                    }
                })

                tablaPuntuacionPolla(value, index, JG, JP, PContra, PFavor, Z, $("#tabla-super-polla")[0].rows.length - 2, juego, true)

                $(value).find(".jg")[0].innerHTML = JG
                $(value).find(".avg")[0].innerHTML = PFavor - PContra
            });
        }
        //coloca funcion de las posiciones y mesas
        posicionesYMesas($("#tabla-super-polla")[0].rows)

        //document.getElementById("button-mix").setAttribute("disabled", "disabled");

        $("#button-start").prop('disabled', true)
        $("#button-order").prop('disabled', false)
    })

    $(document).on('focusout', '.input-puntos', function (event) {

        let punto = $(event.target.parentElement)[0].dataset.puntos
        let puntuacion = event.target.value
        let juego = $("#tabla-super-polla")[0].dataset.rondaEnJuego
        let cell = 2 * juego + 2
        let impar = true
        punto == "F" ? (impar = true) : (impar = false)

        $.each($(event.target.parentElement.parentElement).nextUntil(".line-writer"), function (index, value) {
            (impar) ? cellNew = cell + 1 : cellNew = cell
            impar = !impar
            $(value).children()[cellNew].children[0].value = event.target.value // Revisar sintaxis
        });

        const cellF = $(event.target.parentElement.parentElement).children()[cell].children[0].value
        const cellC = $(event.target.parentElement.parentElement).children()[cell + 1].children[0].value

        if (cellF && cellC) {

            const a = Array.from($(event.target.parentElement.parentElement)) //Row primera de las cuatro
            const b = Array.from($(event.target.parentElement.parentElement).nextUntil(".line-writer")) //Las 3 Rows que le siguen a la anterior
            const rows = [...a, ...b]

            rows.forEach(function callback(currentValue, index, array) {
                const rowSum = $(currentValue)[0].cells

                let JG = 0, JP = 0, PFavor = 0, PContra = 0, Z = 0
                Array.from(rowSum, (element, index) => {

                    if (index > 3 && index < rowSum.length - 2) {
                        const input = parseFloat($(element)[0].children[0].value)
                        if (!isNaN(input)) {
                            let bo = $(element)[0].dataset.puntos
                            if ($(element)[0].dataset.puntos == "C") {
                                PContra += parseFloat($(element)[0].children[0].value)
                                if (input >= 100) {
                                    JP += parseInt(1)
                                }
                                if (input == 0)
                                    Z += parseInt(1)
                            } else {
                                PFavor += parseFloat($(element)[0].children[0].value)
                                if (input >= 100) {
                                    JG += parseInt(1)
                                }
                            }
                        }
                    }
                })

                //Carga las puntuaciones en la otra tabla
                tablaPuntuacionPolla(currentValue, index, JG, JP, PContra, PFavor, Z, $("#tabla-super-polla")[0].rows.length - 2, juego)
                $(currentValue).find(".jg")[0].innerHTML = JG
                $(currentValue).find(".avg")[0].innerHTML = PFavor - PContra
            })

        }
        //Termina la funcion
    })


    $(document).on('click', '#button-add', function (event) {

        let line = `<tr class="row-game">
                            <td class="tdN">Pos</td>
                            <td class="tdG">Mesa</td>
                            <td class="tdG"><select class="select">${optionNombre2}</select></td>
                            <td class="numero-tabla">No.</td>
                            <td data-ronda="1" data-puntos="F"><input type="number" style="width: 100%;" class="PuntosF" disabled/></td>
                            <td data-ronda="1" data-puntos="C"><input type="number" style="width: 100%;" class="PuntosC" disabled/></td>
                            <td data-ronda="2" data-puntos="F"><input type="number" style="width: 100%;" class="PuntosF" disabled/></td>
                            <td data-ronda="2" data-puntos="C"><input type="number" style="width: 100%;" class="PuntosC" disabled/></td>
                            <td data-ronda="3" data-puntos="F"><input type="number" style="width: 100%;" class="PuntosF" disabled/></td>
                            <td data-ronda="3" data-puntos="C"><input type="number" style="width: 100%;" class="PuntosC" disabled/></td>
                            <td data-ronda="4" data-puntos="F"><input type="number" style="width: 100%;" class="PuntosF" disabled/></td>
                            <td data-ronda="4" data-puntos="C"><input type="number" style="width: 100%;" class="PuntosC" disabled/></td>
                            <td data-ronda="5" data-puntos="F"><input type="number" style="width: 100%;" class="PuntosF" disabled/></td>
                            <td data-ronda="5" data-puntos="C"><input type="number" style="width: 100%;" class="PuntosC" disabled/></td>
                            `;


        if ($("#select-ronda").val()) {
            for (var i = 6; i <= $("#select-ronda").val(); i++) {
                line += `<td data-ronda="${i}" data-puntos="F"><input type="number" style="width: 100%;" class="PuntosF" disabled/></td>
                                 <td data-ronda="${i}" data-puntos="C"><input type="number" style="width: 100%;" class="PuntosC" disabled/></td>`
            }
        }
        line += `<td class="jg">0</td>
                            <td class="avg">0</td>
                        </tr>`

        $('#tabla-super-polla tr:last').after(line.repeat(4))

        $("#button-mix").prop('disabled', false)
    })

    $(document).on('change', '.select', function (event) {
        $(event.target.parentElement.parentElement)[0].cells[3].innerHTML = event.target.value
    })


    function comparer(index) {
        return function (a, b) {
            var valA = getCellValue(a, index),
                valB = getCellValue(b, index),
                valC = getCellValue(a, index + 1),
                valD = getCellValue(b, index + 1)
            //console.log(valA, valB, valC, valD)
            return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
        }
    }

    function comparerModificado(index, jgPuntaje = index - 1) {
        return function (a, b) {
            var valA = getCellValue(a, index),
                valB = getCellValue(b, index),
                valC = getCellValue(a, jgPuntaje),
                valD = getCellValue(b, jgPuntaje)
            //console.log("valores", valA, valB, valC, valD)
            if (valC === valD) {
                return $.isNumeric(valA) && $.isNumeric(valB) ? valB - valA : valA.localeCompare(valB)
            }
            return 0;
        }
    }

    function getCellValue(row, index) {
        return $(row).children('td').eq(index).html()
    }

    $(document).on('click', '#button-mix', function (event) {
        let table = $('table#tabla-super-polla tbody')[0]
        //1. get all rows
        let rowsCollection = $('table#tabla-super-polla tbody tr')

        //2. convert to array
        let rows = Array.from(rowsCollection)

        //3. shuffle
        shuffleArray(rows);

        //4. add back to the DOM
        for (const row of rows) {
            table.appendChild(row);
        }

        document.getElementById("button-add").setAttribute("disabled", "disabled");

        const selected = [];

        $(".select").each((index, element) => {
            $(element)[0].disabled = true

            if ($(element)[0].value == 0) {
                $(element)[0].parentElement.parentElement.remove()
            }
        });

        posicionesYMesas($("#tabla-super-polla")[0].rows)
        //Colocar la creacion de mesas y el numero
        numeroYMesa(table)

        $("#button-start").prop('disabled', false)
        $("#button-mix").prop('disabled', true)
    })

    function shuffleArray(array) {
        for (var i = array.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var temp = array[i];
            array[i] = array[j];
            array[j] = temp;
        }
    }
    var positionTablaCopy = 0

    function tablaPuntuacionPolla(currentValue, index, JG, JP, PContra, PFavor, Z, rowsTabOrig, juego, leftoverFields = false) {
        //Cargar en la tabla de puntuaciones
        let tablePuntuacionCell = $('#tabla-super-polla-puntaje')[0].rows[0].cells.length
        let tablePuntuacion = $('#tabla-super-polla-puntaje tbody')[0]

        if (!leftoverFields) {
            positionTablaCopy = 0
        }
        console.log(currentValue)
        console.log("index", index)
        console.log("JG", JG)
        console.log("JP", JP)
        console.log("PContra", PContra)
        console.log("PFavor", PFavor)
        console.log("Z", Z)
        console.log("rowsTabOrig", rowsTabOrig)

        console.log("Error", positionTablaCopy)

        var rowTabPuntuaciones = tablePuntuacion.insertRow(positionTablaCopy);
        for (let celda = 0; celda < tablePuntuacionCell; celda++) {
            this["cell" + celda] = rowTabPuntuaciones.insertCell(celda);
        }

        cell8.colSpan = "5"
        cell9.colSpan = "5"

        cell0.innerHTML = $(currentValue)[0].cells[0].textContent;
        cell1.innerHTML = $(currentValue)[0].cells[2].children[0].selectedOptions[0].value;
        cell2.innerHTML = $(currentValue)[0].cells[2].children[0].selectedOptions[0].label;
        cell3.innerHTML = juego;
        cell4.innerHTML = JG;
        cell5.innerHTML = JP;
        cell6.innerHTML = PFavor;
        cell7.innerHTML = PContra;
        cell8.innerHTML = PFavor - PContra;
        cell9.innerHTML = parseFloat((JG * 1000) / juego).toFixed(2);
        cell10.innerHTML = parseFloat(PFavor / juego).toFixed(2);
        cell11.innerHTML = Z;
        cell12.innerHTML = 1 + (JG * 2) + ((juego - JG) * (-1)) + (Z + 1) + 6;

        positionTablaCopy += 1
        let tablePuntuacionLength = $('#tabla-super-polla-puntaje tbody')[0].rows.length

        if (rowsTabOrig == tablePuntuacionLength) {
            positionTablaCopy = 0
        }

    }

    function posicionesYMesas(tablaRows) {

        let position = 0
        let arrMesa = 0
        let numero = 1
        let mesa = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "U", "V", "W", "X", "Y", "Z"];

        $.each($("#tabla-super-polla")[0].rows, (index, value) => {
            if (index >= 2) {
                position += 1
                $(value)[0].cells[0].innerHTML = position
                $(value)[0].cells[1].innerHTML = numero + mesa[arrMesa]
                numero >= 4 ? (numero = 1, arrMesa += 1) : numero += 1
            }
        })
    }

    function numeroYMesa(tablaRows) {
        const node = document.getElementById("container-players")
        const line = [];

        while (node.hasChildNodes()) {
            node.removeChild(node.lastChild);
        }

        $.each($(tablaRows)[0].rows, function (index, value) {
            let objLine = { "No": $(value)[0].cells[3].textContent, "table": $(value)[0].cells[1].textContent }
            line.push(objLine);
        });

        line.sort((a, b) => (parseFloat(a.No) > parseFloat(b.No)) ? 1 : -1)

        line.map((player) => {
            $("#container-players").append(`<div class="col col-md-1 container-table-player">
                    <div class="item-number">${player.No}</div>
                    <div class="item-table">${player.table}</div>
                </div>`)
        })
    }



    /*function enabledSelect() {
        const selected = [];

        $(".select").each(function () {
            $(this).each(function () {
                if ( ($('option:selected', this).val()) != 0 ) {
                    selected.push(($('option:selected', this).val()));
                }
            });
        });

        $("option").prop("disabled", false);
        for (var index in selected) {
            $('option[value="' + selected[index] + '"]').prop("disabled", false);
        }
    }*/

       // const line = [];

        /*$(".select").each(function () {
            $(this).each(function () {
                if ( ($('option:selected', this).val()) != 0 ) {
                    let objLine = { "No": $('option:selected', this).parents("tr")[0].childNodes[3].childNodes[0].value, "table": $('option:selected', this).parents("tr")[0].childNodes[1].innerText }
                    line.push( objLine );
                }
            });
        });*/

       /* orderedobjLine = [...line];
        orderedobjLine.sort((a, b) => (parseFloat(a.No) > parseFloat(b.No)) ? 1 : -1)

        console.log(line)
        console.log(orderedobjLine)*/

        //var files = JSON.parse(orderedobjLine);

        /*orderedobjLine.map( (player)=>{
            $( "#container-players" ).append( ' <div class="col col-md-2" style="display: grid; grid-template-columns: 1fr 2fr; margin: 10px; border-radius:5px; padding-left: 0; border: 1px solid black"><div style="grid-column: 1; background: #ff9400; padding: 20px; font-size: 20px; text-align: center;">'+ player.No  +'</div><div style="grid-column: 2; padding: 20px; font-size: 20px; text-align: center;" >'+player.table +'</div></div>' );
		})*/


</script>

