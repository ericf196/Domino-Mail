@extends('adminlte::layouts.app')

@section('htmlheader_title')
@endsection

@section('main-content')

    <section>
        <div>

            {{$players}}
            <p>--------------</p>
            {{$playersTeam}}
            <p>--------------</p>
            {{$playersCount}}

            {{--
                        <h4 style="font-size: 2.5rem;margin-bottom: 20px">Datos Generales</h4>

                        @for($i=0; $i< $playersCount; $i++)

                            <div class="col-md-6 form-group">
                                <label for="select{{$i}}" style="font-size: 18px;color: #428bca;">Capitan</label>
                                <select name="select{{$i}}" class="form-control select" required>
                                    <option value=""> --Seleccionar --</option>
                                    @foreach ($players as $item)
                                        <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                        @endfor
                    </div>--}}

        <ul class="list-group">
            <li class="list-group-item">
                <div style="display: flex; justify-content: space-between">
                    <span style="margin: auto 0">Warnings</span>
                    <div>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div style="display: flex; justify-content: space-between">
                    <span style="margin: auto 0">Warnings</span>
                    <div>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div style="display: flex; justify-content: space-between">
                    <span style="margin: auto 0">Warnings</span>
                    <div>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div style="display: flex; justify-content: space-between">
                    <span style="margin: auto 0">Warnings</span>
                    <div>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </li>
        </ul>


        {{--        <ul class="list-group">
                    <li class="list-group-item">Warnings
                        <button style="float:right" type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i>
                        </button>
                    </li>
                    <li class="list-group-item">Warnings
                        <button style="float:right" type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i>
                        </button>
                    </li>
                    <li class="list-group-item">Warnings
                        <button style="float:right" type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i>
                        </button>
                    </li>
                    <li class="list-group-item">Warnings
                        <button style="float:right" type="button" class="btn btn-warning btn-circle"><i class="fa fa-trash"></i>
                        </button>
                    </li>
                </ul>--}}

    </section>

@endsection