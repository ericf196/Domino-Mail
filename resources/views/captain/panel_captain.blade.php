@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

    <section>

        <div class="bs-callout bs-callout-info">
            <form id="ajax-team" action="/captain/create">
                <div class="row">
                    <h4 style="font-size: 2.5rem;margin-bottom: 20px">Datos Generales</h4>
                    <div class="col-md-6 form-group">
                        <label for="select1" style="font-size: 18px;color: #428bca;">Capitan</label>
                        <select name="select1" class="form-control select" required>
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="select2" style="font-size: 18px;color: #428bca;">Delegado</label>
                        <select name="select2" class="form-control select" required>
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top: 3rem">
                    <div class="col-md-6 form-group">
                        <label for="name-team" style="font-size: 18px;color: #428bca;">Nombre Equipo</label>
                        <input name="name-team" class="form-control" type="text" placeholder="Nombre Equipo" required>
                    </div>
                </div>

                <!-- Equipo integrante -->

                <h4 style="font-size: 2.5rem;margin-bottom: 20px ;margin-top: 20px">Integrantes del equipo</h4>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="select-member-1" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-1" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="select-member-2" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-2" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="select-member-3" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-3" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="select-member-4" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-4" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="select-member-5" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-5" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="select-member-6" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-6" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="select-member-7" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-7" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="select-member-8" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-8" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="select-member-9" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-9" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="select-member-10" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-10" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="select-member-11" style="font-size: 18px;color: #428bca;">Integrante</label>
                        <select name="select-member-11" class="form-control select">
                            <option value=""> --Seleccionar --</option>
                            @foreach ($players as $item)
                                <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Fin Equipo integrante -->

                <div class="row form-group" style="margin: 3rem">
                    <button id="submit-team" class="form-control btn btn-info" type="submit">Guardar Equipo <span
                                class="fa fa-arrow-right"></span></button>
                </div>
            </form>

        </div>

        <div class="conteiner-send">
            <div class="loader" style="display: none; margin: 0 auto"></div>
            <div class="form-messages alert alert-success" style="display: none"></div>
        </div>
        @if(count($teams)>0)
            <div class="bs-callout bs-callout-info">

                <h4>Equipos</h4>
                <div class="list-team">
                    <?php $i = 1 ?>
                    @foreach($teams as $team)

                        <div data-num-divs="{{$i}}" class="panel-group" id="accordion{{$i}}">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}">
                                        <h4 class="panel-title">
                                            {{ $team->name }}
                                        </h4>
                                    </div>
                                </div>

                                <div id="collapse{{$i}}" class="panel-collapse collapse">
                                    @if(count($team->members)>0)
                                        <div class="panel-body">

                                            <ul>
                                                @foreach($team->members as $teamNested)
                                                    <li>{{$teamNested->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @else
                                        <div class="panel-body text-center">
                                            <p>Este equipo no tiene jugadores</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <?php $i = $i + 1 ?>
                    @endforeach
                </div>


            </div>
        @else
            <div class="list-team  text-center">
                <div class="no-team">
                    <h4>No Hay Equipos en tu liga</h4>
                </div>
            </div>
        @endif


    </section>

@endsection