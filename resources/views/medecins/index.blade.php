@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('medecins.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>prenom</th>
				<th>email</th>
				<th>telephone</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($medecins as $medecin)

				<tr>
					<td>{{ $medecin->id }}</td>
					<td>{{ $medecin->nom }}</td>
					<td>{{ $medecin->prenom }}</td>
					<td>{{ $medecin->email }}</td>
					<td>{{ $medecin->telephone }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('medecins.show', [$medecin->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('medecins.edit', [$medecin->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['medecins.destroy', $medecin->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
