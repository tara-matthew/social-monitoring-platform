import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/js/components/Index';
import Chart from '@/js/components/SentimentChart';
import ChartContainer from "@/js/components/ChartContainer";

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
        },
        {
            path: '/chart-container',
            name: 'chart-container',
            component: ChartContainer
        }
    ]
})
