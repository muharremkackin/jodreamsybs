<template>
    <transition>
        <div>
            <div class="fixed top-0 left-0 right-0 bottom-0 bg-black opacity-25"></div>
            <div class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center">
                <div class="w-10/12 bg-white rounded">
                    <div class="flex items-center justify-between pl-4 border-b ">
                        <h3 class="font-bold text-xl">Personel Ekle</h3>
                        <button @click="show=false" class="px-4 font-bold text-xl py-1">&times;</button>
                    </div>
                    <div class="px-4 py-4">
                        <form action="" >
                            <div class="flex flex-wrap">
                                <div class="w-1/3 flex flex-col pr-2">
                                    <label class="text-sm font-semibold" for="name">Name</label>
                                    <input class="py-1 px-4 border border-b-2 border-gray-400 rounded" type="text" id="name" v-model="person.name">
                                </div>
                                <div class="w-1/3 flex flex-col px-2">
                                    <label class="text-sm font-semibold" for="email">Email</label>
                                    <input class="py-1 px-4 border border-b-2 border-gray-400 rounded" type="email" id="email" v-model="person.email">
                                </div>
                                <div class="w-1/3 flex flex-col pl-2">
                                    <label class="text-sm font-semibold" for="password">Password</label>
                                    <input class="py-1 px-4 border border-b-2 border-gray-400 rounded" type="password" id="password" v-model="person.password">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        name: "PersonalAdd",
        data() {
            return {

                person: {
                    department_id: null,
                    position_id: null,
                    name: '',
                    email: '',
                    password: '',
                    started_at: '',
                    payroll: '',
                }
            }
        }
    }
</script>

<style scoped>

</style>
