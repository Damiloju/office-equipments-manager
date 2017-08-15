@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>Enter the Office Name</h2>
		
		<form method="POST" action="/add/office/store">

			{{ csrf_field() }}

			<div class="form-group">	
				<textarea name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">	
				<button type="submit" class="btn btn-primary">Add Office</button>
			</div>

		</form>

	</div>
@stop