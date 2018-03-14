
	{!! Form::model($usuario,['route' => ['usuario.update', $usuario->id], 'method'=>'PUT'])!!}
     
      @include('usuario.forms.usr');

    {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    {!!Form::close()!!}

  {!! Form::open(['route' => ['usuario.destroy', $usuario->id], 'method'=>'DELETE'])!!}
     
     

    {!! Form::submit('Eliminar',['class'=>'btn btn-primary']) !!}
    {!!Form::close()!!}
