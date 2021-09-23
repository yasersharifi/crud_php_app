import Vue from 'vue'
import App from './App.vue'

import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

import {library} from "@fortawesome/fontawesome-svg-core";
import {faPlus, faTrash, faEdit, faCheck} from "@fortawesome/free-solid-svg-icons";
library.add(faPlus, faTrash, faEdit, faCheck);

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
