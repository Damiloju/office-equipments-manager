@extends('layouts.app')

@section('content')
	
	<div class="container">

		<h2>Add An Equipment</h2>

		<form class="form-horizontal" method="POST" action="/records/{{$office->id}}/add">

			{{ csrf_field() }}

		  <div class="form-group">
		  	
		  	<label for="name" class="col-sm-2 control-label">Equipment Name</label>
		    <div class="col-sm-10">
			    <select class="form-control" name="name">
			    	@foreach($equipment as $data)
					  <option>{{ ($data->name) }}</option>
					@endforeach
				</select>
			
			</div>	
		  
		  </div>
		  
		  <div class="form-group">
		  
		    <label for="euipment_amount" class="col-sm-2 control-label">Amount</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="euipment_amount" placeholder="Amount in Figures">
		    </div>
		  
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Add Equipment</button>
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