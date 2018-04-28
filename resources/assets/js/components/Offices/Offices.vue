<!--<template>
    <div class="container">
        <h1>Offices</h1>
        <div v-for="(office,index) in offices">
            <a :href="'/office/' + (index +1)">{{ office.name }}</a>
        </div>
        <button @click.prevent="addOffice" class="btn btn-lg btn-primary pull-right" style="margin-top: 15px; margin-bottom: 15px;">
            <btn-loading v-if="loading"></btn-loading>
            <span v-else>Add Office</span>
        </button>
    </div>
</template>-->

<template>
    <div class="content-wrapper" id="dark-theme-settings">
        <!-- Content Header (Page header) -->
        <section class="content-header" id="dark-theme-settings">
            <h1>
                Office
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item active">Office</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" id="dark-theme-settings">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="box" id="dark-theme-settings">
                        <div class="box-header with-border" id="dark-theme-settings">
                            <h3 class="box-title">Offices</h3>

                           <!-- <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>-->
                        </div>
                        <div class="box-body" id="dark-theme-settings">
                            <div class="chart" v-for="(office,index) in offices" id="dark-theme-settings">
                                <h4 style="margin-left: 40px" id=""><a href="#" @click="showOfficeDetails(index+1, office.name)" id="dark-theme-settings">{{index + 1}}.&nbsp;&nbsp;&nbsp;&nbsp;{{ office.name }}</a></h4>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="box" id="dark-theme-settings">
                        <div class="box-header with-border" id="dark-theme-settings">
                            <h3 class="box-title">Add Offices</h3>

                            <!-- <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                             </div>-->
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <textarea v-model="body.body" name="body" class="form-control"></textarea>
                            </div>
                        </div>

                        <button @click.prevent="addOffice" class="btn btn-lg btn-primary pull-right" style="margin-top: 15px; margin-bottom: 15px;">
                            <btn-loading v-if="loading"></btn-loading>
                            <span v-else>Add Office</span>
                        </button>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-12" v-if="showDetails">
                    <!-- AREA CHART -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{officeDetails.name}} Office Details</h3>
                            <h4 style="color: red; float: right;" v-if="officeDetails.records != ''"><a :href="'/records/'+officeDetails.id+'/add'"><i class="fa fa-plus-circle"></i> Add More Equipment</a></h4>

                            <!-- <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                             </div>-->
                        </div>
                        <div class="box-body">
                            <table class="table table-responsive" v-if="officeDetails.records != ''">
                                <tbody>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Equipment Name</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Faulty</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr v-for="(records,index) in officeDetails.records">
                                        <td>{{index+1}}</td>
                                        <td>{{records.equipments.name}}</td>
                                        <td>
                                            {{records.equipments_amount}}&nbsp;
                                            <a :href="'/records/' + records.id + '/equipments/reduce'"><i class="fa fa-minus-square"></i></a>
                                            &nbsp;
                                            <a :href="'/records/' + records.id + '/equipments/increase'"><i class="fa fa-plus-square"></i></a>
                                        </td>
                                        <td>{{records.created_at}}</td>
                                        <td>
                                            {{records.no_of_faulty}} &nbsp;
                                            <a :href="'/records/' + records.id + '/faulty/reduce'"><i class="fa fa-minus-square"></i></a>
                                            &nbsp;
                                            <a :href="'/records/' + records.id + '/faulty/increase'"><i class="fa fa-plus-square"></i></a>
                                        </td>
                                        <td>
                                            <a :href="'/records/' + records.id + '/delete'"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <span v-else="">
                                <h4 style="color: red;">No equipment has been added yet..... <a :href="'/records/'+officeDetails.id+'/add'">Add Equipment</a></h4>
                            </span>

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
  export default {
    mounted() {
        var axios = require("axios");
        axios.get('/offices').then(res => {
            this.offices = res.data;
        }).catch(err => {

        });
      console.log('Component mounted.');
    },
    data()
    {
        return {
          offices: '',
          loading: false,
            body:{},
            showDetails:false,
            officeDetails:{},
        }
    },
    methods: {
      addOffice()
      {
          var axios = require("axios");
          axios.post('/add/office/store', this.body).then(res => {
              if(res.status == 200){
                  this.$swal("Good job!", "You Have Added An Office Successfully!", "success");
                  setTimeout(function () {
                      location = location;
                  }, 3500);
              }
          }).catch(err => {

          });
      },

        showOfficeDetails(id,name){
            var axios = require("axios");
            axios.get('/office/'+id).then(res => {
                if(res.status == 200){
                    this.officeDetails = res.data
                    this.showDetails = !this.showDetails;
                    console.log(this.officeDetails)
                }
            }).catch(err => {

            });

        }
    }
  }
</script>
