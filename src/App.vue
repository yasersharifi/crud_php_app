<template>
  <div id="main-app">
      <h1 class="text-success">{{title}}</h1>
      <font-awesome-icon icon="plus" class="mx-2"/>add appointment
  </div>
</template>

<script>
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
export default {
  name: 'mainApp',
  data: function () {
      return {
          title: "My Crud Project"
      }
  },
  components: {
      FontAwesomeIcon
  }
}
</script>
