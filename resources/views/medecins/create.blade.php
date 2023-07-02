@extends('default')
@section('content')


@section('content')

@if($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif

{!! Form::open(['route' => 'medecins.store']) !!}

<div class="col-md-6 mt-5 offset-4 grid-margin stretch-card">
    <div class="card border border-light rounded">
        <div class="card-body">
            <h4 class="card-title">Add a Doctor</h4>
            <form class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Last name</label>
                    <input type="text" class="form-control" name="nom" id="exampleInputUsername1"
                        placeholder="Lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">First name</label>
                    <input type="text" class="form-control" name="prenom" id="exampleInputUsername1"
                        placeholder="First name">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputUsername1"
                        placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Phone</label>
                    <input type="text" class="form-control" name="telephone" id="exampleInputUsername1"
                        placeholder="Phone">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Create</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

@stop