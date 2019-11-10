@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection


@section('main-content')

    <style>
        .grid-container {
            display: grid;
            grid-column-gap: 80px;
            grid-template-columns: 1fr 1fr;
            /*background-color: #2196F3;*/
            padding: 50px;
            overflow:auto;
        }

        .card-item {
            background-color: #2196F3;
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 15px;
            /*           background-color: #2196F3; */
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .imgHC {
            width: 18rem;
            height: 18rem;
            margin: auto;
        }

        .select-card {
            width: 30rem;
            margin: 15px auto 15px;
        }

        .p-card {
            font-size: 25px;
            margin: auto;
        }

        .ListJug {
            height: 200px;
            /*border: solid;*/
            overflow: auto;
            background-color: #eeeeee;
            padding: 8px;
        }

        .list{
            padding:0;
        }

        .list-item{
            list-style-type: none;
            cursor: pointer;
        }

        .selected-item, .list-item:hover{
            background-color: #00c0ef;
            border-radius: 5px;
        }

    </style>


    <form id="FormBE" class="submit_batalla_escuderia" method="post" action="{{ url('tabla_batalla_escuderia') }}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="grid-container">
            <div class="card-item">
                <h3>Equipo Local</h3>
                <img id="imgHC"
                     src="data:image/jpeg;base64,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"
                     alt="" class="imgHC">
                <select name="homeClub" id="homeClub" class="select select-card">
                    <option value="0">Escoja el Equipo</option>
                            @foreach ($teams as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                           @endforeach
                </select>

                <p class="p-card">Jugadores: <span id="TotalJugHC">0</span></p>
                <p class="p-card">Seleccionados: <span id="contJugHC">0</span></p>

                <div id="JugH" class="ListJug"></div>
            </div>
            <div class="card-item">

                <h3>Equipo Visitante</h3>
                <img id="imgHC" class="imgHC"
                     src="data:image/jpeg;base64,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"
                     alt="" class="imgEquipos">
                <select name="guestClub" id="guestClub" class="select select-card">
                    <option value="0">Escoja el Equipo</option>
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>

                <p class="p-card">Jugadores: <span id="TotalJugV">0</span></p>
                <p class="p-card">Seleccionados: <span id="contJugV">0</span></p>

                <div id="JugV" class="ListJug"></div>

            </div>
        </div>

        <div style="margin: 0 80px" class="row form-group">
            <input id="submit_batalla_escuderia" disabled="disabled" class="form-control btn btn-info" type="submit" name="">
        </div>
    </form>

        <div id="game_batalla_escuderia"></div>

    <div class="loader" style="display: none; margin: 0 auto"></div>
    <div class="form-messages alert alert-success" style="display: none"></div>

@endsection