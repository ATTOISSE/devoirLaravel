@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('vaccins.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>lot</th>
				<th>dose</th>
				<th>date</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($vaccins as $vaccin)

				<tr>
					<td>{{ $vaccin->id }}</td>
					<td>{{ $vaccin->nom }}</td>
					<td>{{ $vaccin->lot }}</td>
					<td>{{ $vaccin->dose }}</td>
					<td>{{ $vaccin->date }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('vaccins.show', [$vaccin->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('vaccins.edit', [$vaccin->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['vaccins.destroy', $vaccin->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
