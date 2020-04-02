<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "App",
        created() {
            this.$http.interceptors.response.use(undefined, function(error) {
                return new Promise(function (resolve, reject) {
                    if (error.status === 401 && error.config && !error.config.__isRetryRequest) {
                        this.$store.dispatch(logout);
                    }
                    throw error;
                });
            });
        }
    }
</script>

<style scoped>

</style>
