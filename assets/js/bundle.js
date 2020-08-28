/**
 * @module jQuery
 */
import $ from 'jquery';
window.jQuery = $; window.$ = $;

import Vue from 'vue';

import App from "./App.vue"

let app = new Vue({
    el: '#app',
    render: h => h(App)
})

window.BootstrapAutocomplete = require('bootstrap-4-autocomplete');


