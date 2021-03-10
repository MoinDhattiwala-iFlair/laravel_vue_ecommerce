import Vue from 'vue';
import Vuex from 'vuex';
import authUser from './modules/authUser'
import users from './modules/users'
import category from './modules/category'
import subcategory from './modules/subcategory'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        authUser,
        users,
        category,
        subcategory
    },
});