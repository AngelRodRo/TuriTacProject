@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($place, ['route' => ['places.update', $place->id], 'method' => 'patch']) !!}

        @include('places.fields')

    {!! Form::close() !!}
</div>
@endsection
