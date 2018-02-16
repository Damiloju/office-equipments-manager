import VueRouter from 'vue-router';

import Vue from 'vue';
import Example from './components/Example';
import Home from './components/Home';
import Offices from './components/Offices/Offices';

Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', Example);
Vue.component('offices', Offices);
Vue.component('home', Home);

const app = new Vue({
    el: '#app'
});