@extends('layouts.app')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">
			<h1>{{ $office->name }}</h1>

			<ul class="list-group">

				@foreach ($office->records as $record)
					<li class="list-group-item">
						{{ $record->equipments->name}}
						
						<a href="/records/{{ $record->id }}/delete" class="btn btn-sm btn-danger pull-right">Delete</a>
						<a class="pull-right" style="margin-right: 20px;">{{ $record->euipments_amount}}</a>
					</li>
				@endforeach
			
			</ul>

			<hr>
		</div>

	</div>

@stop