@extends('default')

@section('content')
<div class="card mt-2 ">
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br>
            @endforeach
        </div>
        @endif

        {!! Form::open(['route' => 'vaccins.store']) !!}
        <div class="col-md-6 offset-4 grid-margin stretch-card">
            <div class="card border border-light rounded">
                <div class="card-body">
                    <h4 class="card-title">Add a Vaccinate</h4>
                    <div class="mb-3">
                        {{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}
                        {{ Form::text('nom', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="mb-3">
                        {{ Form::label('dose', 'Dose', ['class'=>'form-label']) }}
                        {{ Form::text('dose', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="mb-3">
                        {{ Form::label('lot', 'lot', ['class'=>'form-label']) }}
                        {{ Form::text('lot', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="mb-3">
                        {{ Form::label('dateCreation', 'Date de Creation', ['class'=>'form-label']) }}
                        {{ Form::date('dateCreation', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="mb-3">
                        {{ Form::label('dateExpiration', 'Date de Expiration', ['class'=>'form-label']) }}
                        {{ Form::date('dateExpiration', null, array('class' => 'form-control')) }}
                    </div>

                    {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>

            @stop