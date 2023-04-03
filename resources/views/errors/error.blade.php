@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center">
        <img src="assets/img/error.svg" style="max-height: 100px;" class="mb-3">
        <h3 class="text-gray-800 font-weight-bold">Oopss!</h3>
        <p class="lead text-gray-800 mx-auto">{{$error}}.</p>
        <a href="{{ URL::previous() }}">← Volver listado</a>
      </div>
</div>
@endsection
