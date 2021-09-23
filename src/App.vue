<template>
  <div id="main-app" class="p-4">
      <h1 class="text-success mb-3">{{title}}</h1>
      <span class="bg-success text-light mb-3 d-inline-block" style="padding: 10px 15px; border-radius: 5px;">
          <font-awesome-icon icon="plus" /> add appointment
      </span>

      <div v-for="(item, index) in appointments" :key="index">
          <h4>{{item.petName}}</h4>
          <p>{{item.aptNotes}}</p>
      </div>
  </div>
</template>

<script>
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

import axios from "axios";

export default {
  name: 'mainApp',
  data: function () {
      return {
          title: "Appointments List",
          appointments: "",
      }
  },
  components: {
      FontAwesomeIcon
  },
  mounted() {
      axios.get("./data/appointments.json")
      .then(response => (this.appointments = response.data))
  }
}
</script>
