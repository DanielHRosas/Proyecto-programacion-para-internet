	

    {!! Form::open(['route' => 'usuario.store', 'method' =>'post'])!!}
    
    @include('usuario.forms.usr');
 
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!!Form::close()!!}

  