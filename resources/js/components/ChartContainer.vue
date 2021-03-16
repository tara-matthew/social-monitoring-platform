<template>
    <div class="container">
        <line-chart
            v-if="loaded"
            :chartdata="chartdata"/>
    </div>
</template>

<script>
import LineChart from './Chart.vue'

export default {
    name: 'LineChartContainer',
    components: { LineChart },
    data: () => ({
        loaded: false,
        chartdata: null
    }),
    async mounted () {
        this.loaded = false
        try {
            window.axios.get('/api/sentiment').then(response => {
                this.chartdata = response.data;
                console.log(this.chartdata);
                this.loaded = true;
            });
        } catch (e) {
            console.error(e)
        }
    }
}
</script>
