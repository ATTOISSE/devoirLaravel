@extends('default')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif

{!! Form::open(['route' => 'admins.store']) !!}

<div class="mb-3">
    {{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}
    {{ Form::text('nom', null, array('class' => 'form-control')) }}
</div>
<div class="mb-3">
    {{ Form::label('email', 'Email', ['class'=>'form-label']) }}
    {{ Form::text('email', null, array('class' => 'form-control')) }}
</div>
<div class="mb-3">
    {{ Form::label('password', 'Password', ['class'=>'form-label']) }}
    {{ Form::text('password', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@stop