@extends('layout.master')
@section('content')

    <div class="container">
        <h1>
            <p class="text-center">FRASE MOTIVADORA</p>
        </h1>
    </div>
    <div class="container">
        <select class="form-control" name="" id="">
            <option value="">Restaurantes</option>
            <option value="">Centros de salud</option>
            <option value="">Lugares turisticos</option>
        </select>
        <input type="text" class="form-control" required placeholder="Buscar lugar..." >
        <div class="btn btn-primary">Buscar</div>
    </div>
@stop