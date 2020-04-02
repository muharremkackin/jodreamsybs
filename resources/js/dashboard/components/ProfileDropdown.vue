<template>
    <div class="h-full flex items-center relative ">
        <button @click.prevent="showProfileModal" class="h-10 w-56 flex items-center justify-between focus:outline-none active:bg-gray-400 hover:bg-gray-300 focus:bg-gray-400 transition-all duration-300 ease-in-out rounded">
            <img class="w-8 h-8 rounded-full ml-2" src="https://via.placeholder.com/150" alt="">
            <span v-html="profile.name"></span>
            <span class="mr-2">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </span>
        </button>
        <div v-if="profile.show" class="w-56 absolute mt-12 bg-white rounded shadow-lg z-20 flex flex-col">
            <button @click.prevent="logout" type="button" class="h-12  px-2 w-full flex items-center hover:bg-gray-200 focus:bg-gray-300 transition-all duration-300 ease-in-out" to="/dashboard/logout">
                            <span>
                                <svg class="w-6 h-6 mr-2" id="Layer_1" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                    <path d="m13.076 97.083a1.75 1.75 0 0 0 1.75-1.75v-28.666a1.75 1.75 0 0 0 -3.5 0v28.666a1.75 1.75 0 0 0 1.75 1.75z"/>
                                    <path d="m122.38 64.97c.027-.041.046-.085.069-.128a1.037 1.037 0 0 0 .146-.348c.015-.051.035-.1.045-.152a1.755 1.755 0 0 0 0-.685c-.01-.053-.03-.1-.045-.152a1.733 1.733 0 0 0 -.054-.174 1.692 1.692 0 0 0 -.092-.174c-.023-.042-.042-.086-.069-.127a1.75 1.75 0 0 0 -.22-.269l-12.509-12.509a1.75 1.75 0 0 0 -2.475 2.475l9.524 9.523h-53.276a1.75 1.75 0 0 0 0 3.5h53.276l-9.523 9.523a1.75 1.75 0 1 0 2.475 2.475l12.508-12.509a1.75 1.75 0 0 0 .22-.269z"/>
                                    <path d="m95.424 72.25a1.75 1.75 0 0 0 -1.75 1.75v36.9h-45.041v-93.8h45.041v36.9a1.75 1.75 0 1 0 3.5 0v-38.65a1.75 1.75 0 0 0 -1.75-1.75h-46.791v-7.1a1.75 1.75 0 0 0 -2.461-1.6l-39.807 17.693a1.751 1.751 0 0 0 -1.039 1.6v79.615a1.751 1.751 0 0 0 1.039 1.6l39.807 17.692a1.75 1.75 0 0 0 2.461-1.6v-7.1h46.791a1.75 1.75 0 0 0 1.75-1.75v-38.65a1.75 1.75 0 0 0 -1.75-1.75zm-50.291 46.558-36.307-16.138v-77.34l36.307-16.138z"/>
                                </svg>
                            </span>
                Çıkış yap</button>
        </div>

    </div>
</template>

<script>
    export default {
        name: "ProfileDropdown",
        data() {
            return {
                profile: {
                    show: false,
                    name: '',
                    id: null,
                }
            }
        },
        methods: {
            showProfileModal: function () {
                this.profile.show = !this.profile.show;
            },
            logout: function () {
                this.$store.dispatch('logout')
                .then(() => {
                    this.$router.push('/login')
                })
            },

        },
        computed: {
            isLoggedIn: function () {
                return this.$store.getters.isLoggedIn
            }
        },
        created() {
            this.$http({url: '/details', method: 'GET'})
                .then((response => {
                    this.profile.name = response.data.data.name;
                    this.profile.id = response.data.data.id;
                }))
                .catch(error => {
                    console.log(error);
                })
        }
    }
</script>

<style scoped>

</style>
