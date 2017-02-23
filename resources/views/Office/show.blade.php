@extends('layouts.app')

@section('content')

	<div class="row">
	<!-- Displays Office Name in an header 1 -->
		<div class="col-md-6 col-md-offset-3">
			<h1>{{ $office->name }}</h1>

			<ul class="list-group">
				<!-- Loops through the records table  and gets the offic records-->
				@foreach ($office->records as $record)
					<li class="list-group-item">
						<!-- Displays the equipments name -->
						{{ $record->equipments->name}}
						<!-- delete button -->
						<a href="/records/{{ $record->id }}/delete" class="btn btn-sm btn-danger pull-right">
						<span class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Delete" aria-hidden="true"></span>
						</a>
						<!-- Displays the amount of equuipments available -->
						<a class="pull-right" style="margin-right: 20px;">{{ $record->euipments_amount }}</a>

						@unless($record->euipments_amount <= 1)
							<a href="/records/{{ $record->id }}/reduce" class="btn btn-sm btn-danger pull-right" style="margin-right: 20px;">
							<span class="glyphicon glyphicon-minus" data-toggle="tooltip" data-placement="bottom" title="Reduce" aria-hidden="true"></span></a>
						@endunless
					</li>
				@endforeach
			
			</ul>

			<hr>
		</div>

	</div>

@stop