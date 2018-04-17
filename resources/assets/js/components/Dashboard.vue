<template>
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
                                            New Users
                                          </span>
                                        <span class="text-primary font-size-40">34</span>
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
                                            Today Invoices
                                          </span>
                                        <span class="text-info font-size-40">18</span>
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
                                        Open Issues
                                      </span>
                                        <span class="text-warning font-size-40">46</span>
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
                                        New Projects
                                      </span>
                                        <span class="text-danger font-size-40">12</span>
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
                            <h3 class="box-title">Area Chart</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="areaChart" style="height: 350px; width: 465px;" width="465" height="350"></canvas>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
</template>

<script>

</script>