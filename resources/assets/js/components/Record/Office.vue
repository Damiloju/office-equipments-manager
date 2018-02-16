<template>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <a :href="'/office/'+ record.office.id">
                <h2>{{ record.office.name }}</h2>
            </a>


            <ul class="list-group">
                <li class="list-group-item">
                    <h4 style="font-weight: 100"><span style="font-weight:500">Equipment:</span> {{record.equipments.name}}</h4>
                </li>

                <li class="list-group-item">
                    <h4 style="font-weight: 100"><span style="font-weight:500">Added On:</span> {{record.created_at}}</h4>
                    <!--format('jS \o\f F, Y g:i:s a') work on this-->
                </li>

                <li class="list-group-item">
                    <span v-if="record.user == null">
                        <h4 style="font-weight: 100"><span style="font-weight:500">Created By: </span> </h4>
                    </span>
                    <span v-else>
                        <h4 style="font-weight: 100"><span style="font-weight:500">Created By:</span> {{record.user.name}}</h4>
                    </span>
                </li>

                <li class="list-group-item">
                    <h4 style="font-weight: 100"><span style="font-weight:500">Price:</span> {{record.equipments.price}}</h4>
                    <!--currencyFormatter work on this function-->
                </li>

                <li class="list-group-item">
                    <span v-if="record.active == 1">
                        <h4 style="font-weight: 100"><span style="font-weight:500">Condition:</span> Good</h4>
                    </span>
                    <span v-else>
                        <h4 style="font-weight: 100"><span style="font-weight:bold">Condition:</span> Bad</h4>
                    </span>
                </li>
            </ul>
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
          record: record ,
        }
    },
    methods: {

    }
  }
</script>
