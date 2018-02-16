<template>
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
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.');
    },
    data()
    {
        return {
          offices: offices,
          loading: false,
        }
    },
    methods: {
      addOffice()
      {
        this.loading = true;
        window.location.href = "/add/office";
        this.loading = false;
      }
    }
  }
</script>
