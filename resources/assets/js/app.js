
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('flash', require('./components/Flash.vue'));
Vue.component('paginate', require('./components/Paginator.vue'));
Vue.component('post-view', require('./pages/Post.vue'));
Vue.component('challenge-view', require('./pages/Challenge.vue'));




const app = new Vue({
    el: '#app'
});
