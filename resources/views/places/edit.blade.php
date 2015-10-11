@extends('layout.master_admin')

@section('content')
<div class="container" style="margin-top: 75px;">

    @include('common.errors')

    {!! Form::model($place, ['route' => ['places.update', $place->id], 'method' => 'patch']) !!}

        @include('places.fields')

    {!! Form::close() !!}
</div>
@endsection
