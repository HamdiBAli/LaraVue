
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import login from '../components/Login/login'
const routes = [
    { path: '/login', component: login }
  ]


  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang: false,
    mode:'history'
  })

  export default router
