require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';

Vue.use(BootstrapVue);

import { BTable } from 'bootstrap-vue';
Vue.component('b-table', BTable);

Vue.component('crud-cargos', require('./components/gestion/cargos.vue').default);

const app = new Vue({
    el: '#app',
    data: {menu: 0}
});