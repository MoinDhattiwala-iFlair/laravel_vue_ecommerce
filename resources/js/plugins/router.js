import Vue from 'vue'
import Router from 'vue-router'
import Login from '../vue/Login.vue'
import Home from '../vue/Home.vue'
import Dashboard from '../vue/Dashboard.vue'

Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/login',
            name: 'Login',
            component: Login
        },
        {
            path: '/dashboard',
            name: 'Dashboard',
            component: Dashboard
        },
    ]
})