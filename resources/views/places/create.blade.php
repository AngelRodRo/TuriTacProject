@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'places.store']) !!}

        @include('places.fields')

    {!! Form::close() !!}
</div>
@endsection
