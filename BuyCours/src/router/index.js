import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/AboutView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'AboutView',
      component: AboutView
    },
  
  ]
})

export default router
