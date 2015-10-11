@extends('layout.master_admin')

@section('content')

    <div class="container" style="margin-top: 75px;">


        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Lugares</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('places.create') !!}">Añadir nuevo</a>
        </div>

        <div class="row">
            @if($places->isEmpty())
                <div class="well text-center">Ningun lugar encontrado</div>
            @else
                @include('places.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $places])


    </div>
@endsection