
<template>
    <div class="row">
        <!-- Displays Office Name in an header 1 -->
        <div class="col-md-6 col-md-offset-3">
            <div v-for="off in office">
                <h2>{{ off.name }}</h2>
            </div>
            <div>
                <ul class="list-group">
                    <li class="list-group-item" v-for="record in office.records">

                        <!-- Displays the equipments name -->
                        <a :href="'/records/' + record.id">
                            {{ record.equipments.name}}
						</a>

                        <!-- delete button -->
                        <a :href="'/records/' + record.id + '/delete'" class="btn btn-sm btn-danger pull-right" data-toggle="tooltip" data-placement="top" title="Delete">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>

                        <!-- Displays the amount of equipments available -->
                        <a class="pull-right" style="margin-right: 20px;">{{ office.records.euipments_amount }}</a>

                        <span v-if="record.euipments_amount > 1">
                            <a :href="'/records/' + record.id + '/reduce'" class="btn btn-sm btn-danger pull-right" data-toggle="tooltip" data-placement="bottom" title="Reduce" style="margin-right: 20px;">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                        </span>
                    </li>
                </ul>
            </div>
            <a :href=" '/records/' + office.id +'/add'"><button class="btn btn-lg btn-primary" style="margin-top: 10px;font-size: 15px;">Add Equipment</button></a>
            <hr>
        </div>
    </div>

</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.');
    },
    data()
    {
        return {
          office: office,
        }
    },
    methods: {

    }
  }
</script>
