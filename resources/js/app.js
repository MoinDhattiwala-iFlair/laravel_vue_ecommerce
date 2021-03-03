require('./bootstrap');

require('alpinejs');

import Vue from 'vue'
import router from './plugins/router'
import store from './store'
import Vuelidate from 'vuelidate'
import App from './App'
import axios from './plugins/axios';
import Toasted from 'vue-toasted';

Vue.use(Vuelidate)

Vue.use(Toasted)

Vue.config.productionTip = false

Vue.prototype.$isSubmitted = false

Vue.prototype.$axios = axios



new Vue({
    el: '#root',
    components: { App },
    router,
    store
});

