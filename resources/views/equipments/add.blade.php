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

		<h2>Create An Equipment</h2>

		<form class="form-horizontal" method="POST" action="/equipment/new">

			{{ csrf_field() }}

		  <div class="form-group">
		  	
		  	<label for="name" class="col-sm-2 control-label">Equipment Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" placeholder="Name of Equipment">
			</div>
		  </div>

			<div class="form-group">

				<label for="name" class="col-sm-2 control-label">Other Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="other_name" placeholder="Other name of Equipment">
				</div>
			</div>
		  
		  <div class="form-group">
		  
		    <label for="euipment_amount" class="col-sm-2 control-label">Price</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="price" placeholder="Price in Figures">
		    </div>
		  
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Create Equipment</button>
		    </div>
		  </div>
		
		</form>

		@if(count($errors))
			<div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
		@endif

	</div>
@stop