@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Sistema Prestadores Grupo MELD</h4>
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
            <div class="panel-heading"> Afiliados Atendidos {{$cantidad}}</div>
            <div class="panel-body">
                <table class="table table-striped" id="dataTables-example">
                    <thead>
                        <tr>
                            <th scope="col">Orden #</th>
                            <th scope="col">DNI Afiliado</th>
                            <th scope="col">Fecha Atención</th>
                            <th scope="col">Médico</th>
                            <th scope="col">En MELD?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordenes as $item)

                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nro_doc}}</td>
                            <td>{{$item->nombrePrestador}}</td>
                            <td>{{date('d/m/y', strtotime($item->fechaPrestador))}}</td>
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
