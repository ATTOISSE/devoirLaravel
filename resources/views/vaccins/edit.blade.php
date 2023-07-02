@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($vaccin, array('route' => array('vaccins.update', $vaccin->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}
			{{ Form::text('nom', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('lot', 'Lot', ['class'=>'form-label']) }}
			{{ Form::text('lot', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('dose', 'Dose', ['class'=>'form-label']) }}
			{{ Form::text('dose', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('date', 'Date', ['class'=>'form-label']) }}
			{{ Form::text('date', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
