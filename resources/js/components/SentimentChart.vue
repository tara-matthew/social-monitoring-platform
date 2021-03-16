<script>
    import { defineComponent } from 'vue'
    import { Line } from 'vue3-chart-v2'

    export default defineComponent({
        name: 'MonthlyChart',
        extends: Line,
        mounted () {
            // Overwriting base render method with actual data.
            this.renderChart({
                labels: ['15/03/21', '22/03/2021', '27/03/2021', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [
                    {
                        label: 'Sentiment Trend',
                        backgroundColor: '#f87979',
                        data: [0, 25, 0, 50, 25, 75, 100, 80, 40, 20, 12, 11]
                    }
                ]
            })
        }
    })
</script>
