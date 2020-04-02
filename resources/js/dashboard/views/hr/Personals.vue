<template>
    <div class="h-screen-without-16 overflow-y-auto pb-16">
        <div class="h-20 bg-white w-full flex items-center justify-between">
            <h1 class="ml-8 text-3xl font-bold">Personeller</h1>
            <div>
                <button
                    class="h-10 flex px-4 mr-8 items-center text-green-800 bg-green-400 rounded hover:bg-green-500 focus:bg-green-600 focus:text-green-900 focus:outline-none transition-all duration-300 ease-in-out">
                <span>
                    <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                </span>
                    <span class="font-bold text-sm uppercase">
                    Yeni
                </span>
                    <span>
                    <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
                </button>
            </div>
        </div>
        <div class="flex mx-8">
            <div class="p-4 bg-gray-200 w-full rounded shadow-lg">
                <table class="table-auto w-full">
                    <thead>
                    <tr class="border-b border-gray-400">
                        <th></th>
                        <th class="text-left">Adı</th>
                        <th class="text-left">Departman</th>
                        <th class="text-left">Pozisyon</th>
                        <th class="text-left">Başlangıç Tarihi</th>
                        <th class="text-left">Bitiş Tarihi</th>
                        <th class="text-left">Maaş</th>
                        <th class="text-left">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b border-gray-400 hover:bg-white transition-all duration-300 ease-in-out">
                        <td class="py-2 flex items-center justify-center"><div class="w-12 h-12 bg-green-500 flex items-center justify-center font-bold rounded-full"><span class="text-gray-800 text-sm">JED</span></div></td>
                        <td class="py-2">Jane Evelyn Doe</td>
                        <td class="py-2">Human Resource</td>
                        <td class="py-2">Secretary</td>
                        <td class="py-2">03/04/2016</td>
                        <td class="py-2">03/04/2019</td>
                        <td class="py-2">2.300TL</td>
                        <td class="py-2">
                            <div class="flex items-center">
                                <button class="w-6 h-6 flex items-center justify-center bg-green-400 hover:bg-green-600 focus:outline-none focus:bg-green-800 transition-all duration-300 ease-in-out rounded-l">
                                    <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:bg-yellow-800 transition-all duration-300 ease-in-out">
                                    <svg class="w-4 h-4 text-yellow-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-red-400 hover:bg-red-600 focus:outline-none focus:bg-red-800 transition-all duration-300 ease-in-out rounded-r">
                                    <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-400 even:bg-gray-300 hover:bg-white transition-all duration-300 ease-in-out">
                        <td class="py-2 flex items-center justify-center"><div class="w-12 h-12 bg-yellow-500 flex items-center justify-center font-bold rounded-full"><span class="text-gray-800 text-sm">JD</span></div></td>
                        <td class="py-2">John Doe</td>
                        <td class="py-2">Human Resource</td>
                        <td class="py-2">Manager</td>
                        <td class="py-2">03/04/2016</td>
                        <td class="py-2">03/04/2019</td>
                        <td class="py-2">3.500TL</td>
                        <td class="py-2">
                            <div class="flex items-center">
                                <button class="w-6 h-6 flex items-center justify-center bg-green-400 hover:bg-green-600 focus:outline-none focus:bg-green-800 transition-all duration-300 ease-in-out rounded-l">
                                    <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:bg-yellow-800 transition-all duration-300 ease-in-out">
                                    <svg class="w-4 h-4 text-yellow-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-red-400 hover:bg-red-600 focus:outline-none focus:bg-red-800 transition-all duration-300 ease-in-out rounded-r">
                                    <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-400 even:bg-gray-300 hover:bg-white transition-all duration-300 ease-in-out">
                        <td class="py-2 flex items-center justify-center"><div class="w-12 h-12 bg-red-500 flex items-center justify-center font-bold rounded-full"><span class="text-gray-800 text-sm">MM</span></div></td>
                        <td class="py-2">Matthew Murdock</td>
                        <td class="py-2">IT</td>
                        <td class="py-2">Developer</td>
                        <td class="py-2">03/04/2016</td>
                        <td class="py-2">-</td>
                        <td class="py-2">3.000TL</td>
                        <td class="py-2">
                            <div class="flex items-center">
                                <button class="w-6 h-6 flex items-center justify-center bg-green-400 hover:bg-green-600 focus:outline-none focus:bg-green-800 transition-all duration-300 ease-in-out rounded-l">
                                    <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:bg-yellow-800 transition-all duration-300 ease-in-out">
                                    <svg class="w-4 h-4 text-yellow-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-red-400 hover:bg-red-600 focus:outline-none focus:bg-red-800 transition-all duration-300 ease-in-out rounded-r">
                                    <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-400 even:bg-gray-300 hover:bg-white transition-all duration-300 ease-in-out">
                        <td class="py-2 flex items-center justify-center"><div class="w-12 h-12 bg-purple-500 flex items-center justify-center font-bold rounded-full"><span class="text-gray-800 text-sm">BW</span></div></td>
                        <td class="py-2">Bruce Wayne</td>
                        <td class="py-2">IT</td>
                        <td class="py-2">Developer</td>
                        <td class="py-2">03/04/2016</td>
                        <td class="py-2">-</td>
                        <td class="py-2">4.000TL</td>
                        <td class="py-2">
                            <div class="flex items-center">
                                <button class="w-6 h-6 flex items-center justify-center bg-green-400 hover:bg-green-600 focus:outline-none focus:bg-green-800 transition-all duration-300 ease-in-out rounded-l">
                                    <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:bg-yellow-800 transition-all duration-300 ease-in-out">
                                    <svg class="w-4 h-4 text-yellow-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="w-6 h-6 flex items-center justify-center bg-red-400 hover:bg-red-600 focus:outline-none focus:bg-red-800 transition-all duration-300 ease-in-out rounded-r">
                                    <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Personals"
    }
</script>

<style scoped>

</style>
