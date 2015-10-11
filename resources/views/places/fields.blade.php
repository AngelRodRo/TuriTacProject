<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Direccion:') !!}
	{!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Category Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('category', 'Categoria:') !!}
	{!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<!--- Schedule Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('schedule', 'Horario:') !!}
	{!! Form::text('schedule', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Telefono:') !!}
	{!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Description Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripcion:') !!}
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>
