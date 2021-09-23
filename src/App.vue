<template>
  <div id="main-app">
      <h1 class="text-success">{{title}}</h1>
      <font-awesome-icon icon="plus" class="mx-2"/>add appointment

      <div v-for="(item, index) in appointments" :key="index">
          <h4>{{item.petName}}</h4>
          <p>{{item.aptNotes}}</p>
      </div>
  </div>
</template>

<script>
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
export default {
  name: 'mainApp',
  data: function () {
      return {
          title: "My Crud Project",
          appointments: [
              {
                "petName": "Spot",
                "petOwner": "Constance Smith",
                "aptDate": "2017-07-24 08:30",
                "aptNotes": "This German Shepherd is having some back pain"
              },
              {
                "petName": "Goldie",
                "petOwner": "Barot Bellingham",
                "aptDate": "2017-07-22 15:50",
                "aptNotes": "This Goldfish has some weird spots in the belly"
              },
              {
                "petName": "Mitten",
                "petOwner": "Hillary Goldwyn",
                "aptDate": "2017-07-21 9:15",
                "aptNotes": "Cat has excessive hairballs"
              },
              {
                "petName": "Buffy",
                "petOwner": "Hassum Harrod",
                "aptDate": "2017-07-20 15:30",
                "aptNotes": "This Chihuahua has not eaten for three days and is lethargic"
              }
          ]
      }
  },
  components: {
      FontAwesomeIcon
  }
}
</script>
