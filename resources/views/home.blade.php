@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Sistema Prestadores Grupo MELD</h4>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Buscador por Fechas
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label>Fecha desde</label>
                                <input value="{{$desde}}" name="desde" class="form-control" type="date">
                            </div>
                            <div class="form-group">
                                <label>Fecha Hasta</label>
                                <input value="{{$hasta}}" name="hasta" class="form-control" type="date">
                            </div>

                            <button type="submit" class="btn btn-info">Buscar </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <i class="fa fa-user fa-5x"></i>
                    <h3>{{$ordenesAgrupadas}}</h3>
                    Pacientes Atendidos
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="alert alert-warning back-widget-set text-center">
                    <i class="fa fa-file-text-o fa-5x"></i>
                    <h3>{{$cantidad}}</h3>
                    Ordenes recibidas
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Buscar orden para validar</h1>
                    <p>Por favor ingrese el número de orden para validar</p>
                    <div class="col-md-6">
                        <form class="form" action="/orden" method="post">
                            @csrf
                            <div class="input-group">

                                <input type="number" name="orden" required class="form-control">
                                <span class="form-group input-group-btn">
                                    <button class="btn btn-default" type="submit">Buscar</button>
                                </span>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>





        <div class="panel panel-success">
            <div class="panel-heading"> Afiliados Atendidos {{ $cantidad }}</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th scope="col">Orden #</th>
                            <th scope="col">DNI Afiliado</th>
                            <th scope="col">Detalle</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">En MELD?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordenes as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nro_doc }}</td>
                                <td>{{ $item->nombrePrestador }}</td>
                                <td>{{ date('d/m/y', strtotime($item->fechaPrestador)) }}</td>
                                <td>
                                    @if ($item->volvio)
                                        SI
                                    @else
                                        NO
                                    @endif
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
