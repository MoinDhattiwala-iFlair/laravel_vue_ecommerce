import Vue from 'vue'
import Router from 'vue-router'
import Auth from '../vue/Auth.vue'
import Dashboard from '../vue/Dashboard.vue'
import Users from '../vue/Users.vue'
import AddUser from '../vue/AddUser.vue'
import PageNotFound from '../vue/PageNotFound.vue'

Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Auth',
            component: Auth
        },
        {
            path: '/dashboard',
            name: 'Dashboard',
            component: Dashboard
        },
        {
            path: '/users',
            name: 'Users',
            component: Users
        },
        {
            path: '/user/add',
            name: 'AddUser',
            component: AddUser
        },
        {
            path: '/user/add/:id',
            name: 'AddUser',
            component: AddUser
        },
        { 
            path: "*", 
            component: PageNotFound 
        }
    ]
})