import VueRouter from 'vue-router';

import Vue from 'vue';
import Example from './components/Example';
import Home from './components/Home';
import Offices from './components/Offices/Offices';
import ViewOffice from './components/Offices/ViewOffice';
import Office from './components/Record/Office';
import BtnLoader from './misc/ButtonLoader.vue';

Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('offices', Offices);
Vue.component('viewoffice', ViewOffice);
Vue.component('home', Home);
Vue.component('office', Office);
Vue.component('btn-loading', BtnLoader);

const app = new Vue({
    el: '#app'
});