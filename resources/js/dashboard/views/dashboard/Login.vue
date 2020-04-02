<template>
<div class="w-screen h-screen flex items-center justify-center">
    <div class="w-full md:w-88 p-4 border border-gray-400 rounded">
        <h1 class="text-xl font-bold pb-1 border-b">Giriş Yap</h1>
        <form @submit.prevent="login" action="">
            <div class="my-2 flex flex-col">
                <label class="text-sm font-bold text-gray-800" for="email">Email</label>
                <input v-model="form.email" class="py-1 px-2 border rounded focus:outline-none focus:border-gray-400" id="email" type="email" required>
            </div>
            <div class="my-2 flex flex-col">
                <label class="text-sm font-bold text-gray-800" for="password">Password</label>
                <input v-model="form.password" class="py-1 px-2 border rounded focus:outline-none focus:border-gray-400" id="password" type="password" required>
            </div>
            <div class="mt-4">
                <button type="submit" class="w-full text-left text-sm font-bold border border-b-2 border-gray-400 py-2 px-4 rounded hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-300 transition-all duration-300 ease-in-out focus:outline-none">Giriş Yap</button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                form: {
                    email: "",
                    password: ""
                }
            }
        },
        methods: {
            login: function () {
                let email = this.form.email;
                let password = this.form.password;
                this.$store.dispatch('login', { email, password })
                .then(() => this.$router.push('/dashboard/'))
                .catch(error => console.log(error));
            }
        }
    }
</script>

<style scoped>

</style>
