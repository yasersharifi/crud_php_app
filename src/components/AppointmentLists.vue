<template>
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex align-items-start" v-for="(item, index) in appointments" :key="index">
                        <button class="me-2 btn btn-sm btn-danger">
                            <font-awesome-icon icon="trash" @click="$emit('remove', item)"/>
                        </button>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <span class="h4 text-primary">{{item.petName}}</span>
                                <span class="float-end">{{formattedDate(item.aptDate)}}</span>
                            </div>
                            <div class="owner-name">
                                <span class="fw-bold text-primary me-1">Owner: </span>
                                <span>{{item.petOwner}}</span>
                            </div>
                            <div>{{item.aptNotes}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
    import moment from "moment";
    export default {
        name: "AppointmentLists",
        props: ["appointments"],
        components: {
            FontAwesomeIcon,
        },
        methods: {
          formattedDate: function (date) {
              return moment(new Date(date)).format("MM-DD-YY, h:mm a")
          }
        }
    }
</script>