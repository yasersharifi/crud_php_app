<template>
  <div id="main-app" class="container">
      <div class="row">
          <appointment-lists :appointments="appointments" @remove="removeItem"/>
      </div>
  </div>
</template>

<script>
import AppointmentLists from "./components/AppointmentLists";
import axios from "axios";
import _ from "lodash";

export default {
  name: 'mainApp',
  data: function () {
      return {
          title: "Appointments List",
          appointments: "",
      }
  },
  components: {
      AppointmentLists
  },
  mounted() {
      axios.get("./data/appointments.json")
      .then(response => (this.appointments = response.data))
  },
  methods: {
      removeItem: function (apt) {
          this.appointments = _.without(this.appointments, apt);
      }
  }
}
</script>
