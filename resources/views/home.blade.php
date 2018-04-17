@extends('layouts.v2.app')

@section('content')
    <div class="content-wrapper" style="">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 ">
                    <div class="box">
                        <div class="row no-gutters py-2">

                            <div class="col-sm-6 col-lg-3">
                                <div class="box-body br-1 border-light">
                                    <div class="flexbox mb-1">
                                          <span>
                                            <i class="ion-person font-size-26"></i><br>
                                            Offices
                                          </span>
                                        <span class="text-primary font-size-40">{{$data['officeCount']}}</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3 hidden-down">
                                <div class="box-body br-1 border-light">
                                    <div class="flexbox mb-1">
                                          <span>
                                            <i class="ion-document font-size-26"></i><br>
                                            Equipments
                                          </span>
                                        <span class="text-info font-size-40">{{$data['equipmentsCount']}}</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                                <div class="box-body br-1 border-light">
                                    <div class="flexbox mb-1">
                                      <span>
                                        <i class="ion-information font-size-26"></i><br>
                                        Users
                                      </span>
                                        <span class="text-warning font-size-40">{{$data['userCount']}}</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                                <div class="box-body">
                                    <div class="flexbox mb-1">
                                      <span>
                                        <i class="ion-folder font-size-26"></i><br>
                                        Faulty Equipment
                                      </span>
                                        <span class="text-danger font-size-40">{{$data['faultyCount']}}</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- AREA CHART -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">User Activities</h3>

                            <div class="box-tools pull-right">
                                {{-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>--}}
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-responsive">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Equipment Name</th>
                                    <th>Quantity</th>
                                    <th>Created By</th>
                                    <th>Office</th>
                                    <th>Date</th>
                                </tr>
                                <?php $i = 1;?>
                                @foreach($data['records'] as $records)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$records['equipments']['name']}}</td>
                                        <td>{{$records['equipments_amount']}}</td>
                                        <td>{{$records['user']['name']}}</td>
                                        <td>{{$records['office']['name']}}</td>
                                        <td>{{$records['created_at']}}</td>
                                    </tr>
                                    <?php $i++;?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection
