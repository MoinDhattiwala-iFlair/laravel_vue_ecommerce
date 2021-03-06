import Vue from 'vue'
import Router from 'vue-router'
import Auth from '../vue/Auth.vue'
import Dashboard from '../vue/Dashboard.vue'
import Users from '../vue/Users.vue'
import AddUser from '../vue/AddUser.vue'
import Category from '../vue/Category.vue'
import AddCategory from '../vue/AddCategory.vue'
import SubCategory from '../vue/SubCategory.vue'
import AddSubCategory from '../vue/AddSubCategory.vue'
import Product from '../vue/Product.vue'
import AddProduct from '../vue/AddProduct.vue'
import Post from '../vue/Post.vue'
import AddPost from '../vue/AddPost.vue'
import PostDetail from '../vue/PostDetail.vue'
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
            path: '/category',
            name: 'Category',
            component: Category
        },
        {
            path: '/category/add',
            name: 'AddCategory',
            component: AddCategory
        },
        {
            path: '/category/:slug',
            name: 'AddCategory',
            component: AddCategory
        },
        {
            path: '/subcategory',
            name: 'SubCategory',
            component: SubCategory
        },
        {
            path: '/subcategory/add',
            name: 'AddSubCategory',
            component: AddSubCategory
        },
        {
            path: '/subcategory/:slug',
            name: 'AddSubCategory',
            component: AddSubCategory
        },
        {
            path: '/product',
            name: 'Product',
            component: Product
        },
        {
            path: '/product/add',
            name: 'AddProduct',
            component: AddProduct
        },
        {
            path: '/product/:slug',
            name: 'AddProduct',
            component: AddProduct
        },
        {
            path: '/post',
            name: 'Post',
            component: Post
        },
        {
            path: '/post/add',
            name: 'AddPost',
            component: AddPost
        },
        {
            path: '/post/edit/:slug',
            name: 'AddPost',
            component: AddPost
        },
        {
            path: '/post/:slug',
            name: 'PostDetail',
            component: PostDetail
        },
        {
            path: "*",
            component: PageNotFound
        }
    ]
})