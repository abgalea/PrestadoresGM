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
                                <td>{{$afiliado->nro_doc}}</td>
                                <td>{{$afiliado->nom_beneficiario}}</td>
                                <td>{{$afiliado->plan}}</td>
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
                Detalle de la Orden #{{$orden->id}}
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
                                <td>{{$orden->fecha}}</td>
                                <td>
                                    @if ($orden->anular != 1)
                                        @if ($orden->mp_status == 1)
                                            <a class="btn btn-success btn-xs">vigente</a>
                                        @else
                                            <a class="btn btn-warning btn-xs">error</a>
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
@endsection
