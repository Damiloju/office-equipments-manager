@extends('layouts.v2.app')

@section('content')

	<div class="content-wrapper" id="dark-theme-settings">
		<!-- Content Header (Page header) -->
		<section class="content-header" id="dark-theme-settings">
			<h1>
				Office
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="breadcrumb-item active">Equipment</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content" id="dark-theme-settings">
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<!-- AREA CHART -->
					<div class="box" id="dark-theme-settings">
						<div class="box-header with-border" id="dark-theme-settings">
							<h3 class="box-title">Create Equipment</h3>

							<!-- <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                             </div>-->
						</div>
						<div class="box-body" id="dark-theme-settings">
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