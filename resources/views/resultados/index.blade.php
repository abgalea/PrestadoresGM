@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <!--   Kitchen Sink -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Afiliado
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>DNI</th>
                                    <th>Apellido y Nombre</th>
                                    <th>PLAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $afiliado->nro_doc }}</td>
                                    <td>{{ $afiliado->nom_beneficiario }}</td>
                                    <td>{{ $afiliado->plan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Kitchen Sink -->
        </div>
        <div class="col-md-6">
            <!--   Basic Table  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Detalle de la Orden #{{ $orden->id }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fecha Emisión</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $orden->fecha }}</td>
                                    <td>
                                        @if ($orden->anular != 1)
                                            @if ($orden->mp_status == 1)
                                                @if (!$orden->volvio && !$orden->prestador)
                                                    <a class="btn btn-success btn-xs">Disponible para atención</a>
                                                @else
                                                    <a class="btn btn-danger btn-xs">No diponible para atención</a>
                                                @endif
                                            @else
                                                <a class="btn btn-warning btn-xs">Falta Pago</a>
                                            @endif
                                        @else
                                            <a class="btn btn-danger btn-xs">anulada</a>
                                        @endif

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Basic Table  -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            @if ($orden->anular != 1)
                @if ($orden->mp_status == 1)
                    @if (!$orden->volvio && !$orden->prestador)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                ACTUALIZAR ORDEN
                            </div>
                            <div class="panel-body">

                                <form action="/control" method="POST">
                                    @csrf
                                    INGRESAR NOMBRE DEL MÉDICO QUE ESTA REALIZANDO LA ATENCIÓN
                                    <br>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="success">NOMBRE DEL MÉDICO O CLÍNICA</label>
                                        <input type="text" name="nombrePrestador" placeholder="Ingresar el nombre del médico o de la clínica" class="form-control" id="success">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="warning">USUARIO</label>
                                        <input type="text" readonly value="{{ Auth::user()->name }}" class="form-control"
                                            id="warning">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="warning">FECHA</label>
                                        <input type="date" name="fechaPrestador" readonly value="{{ date('Y-m-d') }}" class="form-control"
                                            id="warning">
                                        <input type="hidden" name="id_orden"
                                            value='{{ Crypt::encryptString($orden->id) }}'>
                                    </div>
                                    <button class="btn btn-success btn-lg" type="submit">¡Guardar!</button>
                                </form>


                            </div>
                        </div>
                    @else
                        <a class="btn btn-danger btn-lg">No diponible para atención</a>
                    @endif
                @else
                    <a class="btn btn-warning btn-lg">Falta pagar el coseguro</a>
                @endif
            @else
                <a class="btn btn-danger btn-lg">ORDEN ANULADA</a>
            @endif
        </div>
    </div>
@endsection
