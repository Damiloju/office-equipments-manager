@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Offices</h1>
		@foreach($offices as $office)
			<!-- Displays the office name as a link -->
			<div>	
				<a href="{{ $office->path() }}">{{ $office->name }}</a>
			</div>
		@endforeach
		<a href="\add\office"><button class="btn btn-lg btn-primary pull-right" style="margin-top: 15px; margin-bottom: 15px;">Add Office</button></a>
	</div>
@endsection