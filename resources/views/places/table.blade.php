<table class="table table-responsive">
    <thead>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Categoria</th>
        <th>Horario</th>
        <th>Telefono</th>
        <th>Descripcion</th>
        <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($places as $place)
        <tr>
            <td>{!! $place->name !!}</td>
			<td>{!! $place->address !!}</td>
			<td>{!! $place->category !!}</td>
			<td>{!! $place->schedule !!}</td>
			<td>{!! $place->phone !!}</td>
			<td>{!! $place->description !!}</td>
            <td>
                <a href="{!! route('places.edit', [$place->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('places.delete', [$place->id]) !!}" onclick="return confirm('Are you sure wants to delete this Place?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
