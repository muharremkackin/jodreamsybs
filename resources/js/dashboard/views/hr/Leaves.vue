<template>
    <div class="h-screen-without-16 overflow-y-auto pb-16">
        <div class="h-20 bg-white w-full flex items-center justify-between">
            <h1 class="ml-8 text-3xl font-bold">İzinler</h1>
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
        <div class="flex flex-wrap mx-4">
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">İzinler</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yıllık İzin</h2>
                        </div>
                        <div class="relative">
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                            <div class="absolute bg-white right-0 rounded shadow text-xs">
                                <button class="py-1 px-2 w-full text-left">Kaldır</button>
                                <button class="py-1 px-2 w-full text-left">Düzenle</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="uppercase font-bold text-xs mr-2 text-gray-800">
                            Ücretli
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 gün</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-32 my-4 px-4">
                <div class="w-full h-full p-4 shadow-lg rounded-lg bg-gray-200 flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-800 font-bold">Leaves</span>
                            <h2 class="text-xl text-gray-800 font-bold">Yearly Leaves</h2>
                        </div>
                        <div>
                            <button class="w-5 h-5 flex items-center justify-center hover:bg-gray-400 focus:outline-none focus:bg-gray-500 rounded-full">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <div class="w-4 h-4 mr-2 rounded-full border border-gray-800 flex items-center justify-center">
                            <svg class="w-2 h-2 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-xs text-gray-800 font-bold">7 days</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Leaves"
    }
</script>

<style scoped>

</style>
