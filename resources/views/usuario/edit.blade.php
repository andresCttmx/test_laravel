
@extends('layouts.admin')

	@section('content')
	{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!} 
	@include('usuario.forms.usr') 
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
    {!!Form::submit('Cancelar!',['class'=>'btn btn-warning']);!!}
	{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!} 
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}

	@endsection