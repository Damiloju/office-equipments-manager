@extends('layouts.app')

@section('content')
	<div class="container">
		@if(Session::has('status'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  	<span aria-hidden="true">&times;</span></button>
			  	<strong>Success!</strong>{{ Session::get('status')}}.
			</div>
		@endif
		<h2>Enter the Office Name</h2>
		
		<form method="POST" action="/add/office/store">

			{{ csrf_field() }}

			<div class="form-group">	
				<textarea name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">	
				<button type="submit" class="btn btn-primary">Add Office</button>
			</div>

			@if(count($errors))
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li> {{ $error }} </li>
						@endforeach
					</ul>
				</div>
			@endif

		</form>

	</div>
@stop