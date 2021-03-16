import Vue from 'vue';
import Vuex from 'vuex';
import authUser from './modules/authUser'
import users from './modules/users'
import category from './modules/category'
import subcategory from './modules/subcategory'
import product from './modules/product'
import post from './modules/post'
import helper from './modules/helper'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        authUser,
        users,
        category,
        subcategory,
        product,
        post,
        helper,
    },
});