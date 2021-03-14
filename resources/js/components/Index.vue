<template>
    <h1>Home</h1>
</template>

<script>
    export default {
        mounted() {
            window.axios.get('/api/tenant').then(response => {
                let tenant = response.data;
                console.log(tenant);
            })
        }
    }
</script>
