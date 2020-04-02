<template>
<div class="w-screen h-screen flex items-center justify-center">
    <div class="w-120">
        <h1 class="text-6xl font-extrabold">404</h1>
        <p class="text-lg">Aradığınız sayfa bulunamadı. Anasayfaya dönmek için aşağıdaki butona basabilirsiniz.</p>
        <router-link class="text-xl py-2 px-2 mt-4 flex items-center border-b-4 border rounded border-gray-400 hover:bg-gray-300 active:bg-gray-400 transition-all duration-300 ease-in-out" :to="{name: 'dashboard.home'}">
            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            <span>Anasayfa</span>
        </router-link>
    </div>
</div>
</template>

<script>
    export default {
        name: "FourOFour"
    }
</script>

<style scoped>

</style>
