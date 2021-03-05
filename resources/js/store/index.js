import Vue from 'vue';
import Vuex from 'vuex';
import authUser from './modules/authUser'
import users from './modules/users'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        authUser,
        users
    },
});