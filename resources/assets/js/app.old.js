/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');
// window.Events = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('form-url', require('./forms/url.vue'));
// Vue.component('v-form', require('./components/vForm.vue'));
// Vue.component('v-field', require('./components/inputs/vField.vue'));
// Vue.component('v-control', require('./components/inputs/vControl.vue'));
// Vue.component('v-input', require('./components/inputs/vInput.vue'));
// Vue.component('v-label', require('./components/inputs/vLabel.vue'));
// Vue.component('v-button', require('./components/inputs/vButton.vue'));
// Vue.component('v-error', require('./components/inputs/vError.vue'));

new Vue({
    el: '#app',
    data: {
        navToggle: false
    }
});