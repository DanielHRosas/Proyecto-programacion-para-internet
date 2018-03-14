
<h2>Usuarios</h2>


<div class="form-group">

     
    {!! Form::label('Nombre') !!}
    {!! Form::text('nombres', null, ['class'=>'form-control']) !!}
    {!! Form::submit('Buscar',['class'=>'btn btn-primary']) !!}
    </div> 
   
<table class="table" border="2">
	<thead>
		<th>Nombres</th>
		<th>Apellido</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Telefono</th>
	</thead>


@foreach ($use as $usuario)
	
	
	<tbody>

	
	
	<td>{{ $usuario->nombres }}</td>
<td>{{ $usuario->apellidop}}</td>
<td>{{ $usuario->apellidom}}</td>
<td>{{ $usuario->correo}}</td>
<td>{{ $usuario->telefono}}</td>
<td>
	{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-primary'])!!}
</td>
<td>
	{!!link_to_route('usuario.edit', $title = 'Eliminar', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-primary'])!!}
</td>

	</tbody>

	@endforeach
</table>


