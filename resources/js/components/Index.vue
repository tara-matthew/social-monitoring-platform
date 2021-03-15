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
            <td>{{ row.brand_id}}</td>
            <td>{{ row.comment }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        data() {
            return {
                feedback: [],
                filter: 4
            }
        },
        computed: {
          filteredRows() {
              return this.feedback.filter(row => {
                  return row.brand_id === this.filter;
              })
            }

        },
        mounted() {
            window.axios.get('/api/feedback').then(response => {
                this.feedback = response.data;
                this.feedback = [].concat.apply([], this.feedback);
            })
        }
    }
</script>
