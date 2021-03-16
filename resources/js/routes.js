import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/js/components/Index';
import Chart from '@/js/components/SentimentChart';

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/chart',
            name: 'chart',
            component: Chart
        }
    ]
})
