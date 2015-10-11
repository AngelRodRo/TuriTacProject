@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Places</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('places.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($places->isEmpty())
                <div class="well text-center">No Places found.</div>
            @else
                @include('places.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $places])


    </div>
@endsection