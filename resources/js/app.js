require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all');
require('sweetalert2/dist/sweetalert2.all.js');
window.Swal = require('sweetalert2');

import vue from 'vue';
window.Vue = vue;

import App from './components/App.vue';

//Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

//Importacion y configuracion de Router
import VueRouter from 'vue-router';
import { routes } from './routes';
import Vue from 'vue';
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App)
});