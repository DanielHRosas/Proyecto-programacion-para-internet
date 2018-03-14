	{!! Form::model($usuario,['route' => ['usuario.update', $usuario->id], 'method'=>'PUT'])!!}
     
      @include('usuario.forms.usr');

    {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    {!!Form::close()!!}

  