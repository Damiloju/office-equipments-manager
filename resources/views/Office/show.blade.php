@extends('layouts.app')

@section('content')
	<div class="container">
		@if(Session::has('del'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  	<span aria-hidden="true">&times;</span></button>
				  	<strong>Success!</strong>{{ Session::get('del')}}.
				</div>
		@endif

		@if(Session::has('red'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  	<span aria-hidden="true">&times;</span></button>
				  	<strong>Success!</strong>{{ Session::get('red')}}.
				</div>
		@endif

		@if(Session::has('sto'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  	<span aria-hidden="true">&times;</span></button>
				  	<strong>Success!</strong>{{ Session::get('sto')}}.
				</div>
		@endif
	</div>

	<div class="row">
	<!-- Displays Office Name in an header 1 -->
		<div class="col-md-6 col-md-offset-3">
			<h2>{{ $office->name }}</h2>

			<ul class="list-group">

				<!-- Loops through the records table  and gets the offic records-->
				@foreach ($office->records as $record)

					<li class="list-group-item">

						<!-- Displays the equipments name -->
						<a href="/records/{{ $record->id }}">
							{{ $record->equipments->name}}
						</a>

						<!-- delete button -->
						<a href="/records/{{ $record->id }}/delete" class="btn btn-sm btn-danger pull-right" data-toggle="tooltip" data-placement="top" title="Delete">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</a>
						
						<!-- Displays the amount of equipments available -->
						<a class="pull-right" style="margin-right: 20px;">{{ $record->euipments_amount }}</a>

						@unless($record->euipments_amount <= 1)
							<a href="/records/{{ $record->id }}/reduce" class="btn btn-sm btn-danger pull-right" data-toggle="tooltip" data-placement="bottom" title="Reduce" style="margin-right: 20px;">
							<span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						@endunless
					</li>
				@endforeach
				<a href="\records\{{ $office->id }}\add"><button class="btn btn-lg btn-primary" style="margin-top: 10px;font-size: 15px;">Add Equipment</button></a>
			</ul>

			<hr>
		</div>
	</div>

@stop