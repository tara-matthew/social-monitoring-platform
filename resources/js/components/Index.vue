<template>
    <h1>Home</h1>

    <table>
        <thead>
        <tr>
            <th>Brand</th>
            <th>Feedback</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(row) in filteredRows">
<!--            <tr v-for="(inner) in row">-->
                <td>{{ row.brandName}}</td>
                <td>{{ row.comment }}</td>
<!--            </tr>-->
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        data() {
            return {
                feedback: [],
                filter: [1,2,3,4,5,6],
                filter2: 2
            }
        },
        computed: {
          filteredRows() {
              return this.feedback.filter(row => {
                  return row.brand_id === this.filter[0] || row.brand_id === this.filter[1];
              });
            }
        },
        mounted() {
            window.axios.get('/api/feedback').then(response => {
                this.feedback = response.data;
                this.feedback = [].concat.apply([], this.feedback);
            });
        }
    }
</script>

