@extends('layout.master_admin')

@section('content')
<div class="container" style="margin-top: 75px;">

    @include('common.errors')

    {!! Form::open(['route' => 'places.store']) !!}

        @include('places.fields')

    {!! Form::close() !!}
</div>
@endsection
