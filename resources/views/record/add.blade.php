@extends('layouts.v2.app')

@section('content')
	
	<div class="content-wrapper" style="">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Office
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="breadcrumb-item active">Equipment</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<!-- AREA CHART -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Add Equipment to {{$office->name}}'s Office</h3>

							<!-- <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                             </div>-->
						</div>
						<div class="box-body">
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
										<input type="text" class="form-control" name="equipments_amount" placeholder="Amount in Figures">
									</div>

								</div>

								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary">Add Equipment</button>
									</div>
								</div>

							</form>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>

		</section>
		<!-- /.content -->
	</div>

@stop