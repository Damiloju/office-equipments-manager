<template>
    <div class="container">
        <h1>Offices</h1>
        <div>

        </div>
        <a href="\add\office"><button @click.prevent="addOffice" class="btn btn-lg btn-primary pull-right" style="margin-top: 15px; margin-bottom: 15px;">Add Office</button></a>
    </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    },

    method: {
      addOffice()
      {

      }
    }
  }
</script>
