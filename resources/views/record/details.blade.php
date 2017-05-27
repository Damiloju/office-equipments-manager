@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<a href="/office/{{$record->office->id}}">
				<h2>{{ $record->office->name }}</h2>
			</a>


			<ul class="list-group">
				<li class="list-group-item">
					<h3 style="font-weight: 100"><span style="font-weight:500">Equipment:</span> {{$record->equipments->name}}</h3>
				</li>

				<li class="list-group-item">
					<h4 style="font-weight: 100"><span style="font-weight:500">Bought On:</span> {{$record->created_at->format('jS \o\f F, Y g:i:s a')}}</h4>
				</li>

				<li class="list-group-item">
					@if($record->user == null)
						<h4 style="font-weight: 100"><span style="font-weight:500">Created By: </span> </h4>
					@else
						<h4 style="font-weight: 100"><span style="font-weight:500">Created By:</span> {{$record->user->name}}</h4>
					@endif
				</li>

				<li class="list-group-item">
					<h4 style="font-weight: 100"><span style="font-weight:500">Price:</span> {{$record->equipments->price}}</h4>
				</li>

				<li class="list-group-item">
					@if($record->active == 1)
						<h4 style="font-weight: 100"><span style="font-weight:500">Condition:</span> Good</h4>
					@else
						<h4 style="font-weight: 100"><span style="font-weight:bold">Condition:</span> Bad</h4>
					@endif
				</li>
			</ul>
		</div>
	</div>
@stop