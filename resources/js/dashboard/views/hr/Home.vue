<template>

    <div class="h-screen-without-16 overflow-y-auto pb-16">
        <div class="h-20 bg-white w-full flex items-center justify-between">
            <h1 class="ml-8 text-3xl font-bold">İnsan Kaynakları</h1>
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
        <div>
            <h2 class="text-xl font-bold ml-8">Bekleyen İzin Talepleri</h2>
        </div>
        <div class="ml-4 mr-8 flex overflow-x-auto">
            <div class="w-96 h-32 my-4 mx-4 shadow-lg rounded-lg bg-gray-200 flex">
                <div class="w-32 h-full border-r border-gray-400 flex items-center justify-center">
                    <svg class="w-10 h-10 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <div class="w-full h-full flex flex-col justify-center px-2">
                    <span class="text-xs text-gray-800 uppercase">Yearly Leaves</span>
                    <span class="text-sm text-gray-800 font-bold mb-2">Jane Evelyn Doe</span>
                    <div class="flex items-center mb-2">
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-green-800 font-bold">
                                        18.05.2020
                                    </span>
                        </div>
                        <span class="text-bold text-xs mx-2">-</span>
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-red-800 font-bold">
                                        23.05.2020
                                    </span>
                        </div>
                    </div>
                    <div class="text-gray-800 font-bold text-xs uppercase">Available Yearly Leaves: 7</div>
                </div>
                <div class="w-32 h-full border-l border-gray-400 flex flex-col">
                    <button
                        class="h-16 w-full flex items-center justify-center bg-green-500 hover:bg-green-700 focus:bg-green-900 focus:outline-none rounded-tr-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <button
                        class="h-16 w-full flex items-center justify-center bg-red-500 hover:bg-red-700 focus:bg-red-900 focus:outline-none rounded-br-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-96 h-32 my-4 mx-4 shadow-lg rounded-lg bg-gray-200 flex">
                <div class="w-32 h-full border-r border-gray-400 flex items-center justify-center">
                    <svg class="w-10 h-10 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <div class="w-full h-full flex flex-col justify-center px-2">
                    <span class="text-xs text-gray-800 uppercase">Yearly Leaves</span>
                    <span class="text-sm text-gray-800 font-bold mb-2">Jane Evelyn Doe</span>
                    <div class="flex items-center mb-2">
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-green-800 font-bold">
                                        18.05.2020
                                    </span>
                        </div>
                        <span class="text-bold text-xs mx-2">-</span>
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-red-800 font-bold">
                                        23.05.2020
                                    </span>
                        </div>
                    </div>
                    <div class="text-gray-800 font-bold text-xs uppercase">Available Yearly Leaves: 7</div>
                </div>
                <div class="w-32 h-full border-l border-gray-400 flex flex-col">
                    <button
                        class="h-16 w-full flex items-center justify-center bg-green-500 hover:bg-green-700 focus:bg-green-900 focus:outline-none rounded-tr-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <button
                        class="h-16 w-full flex items-center justify-center bg-red-500 hover:bg-red-700 focus:bg-red-900 focus:outline-none rounded-br-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-96 h-32 my-4 mx-4 shadow-lg rounded-lg bg-gray-200 flex">
                <div class="w-32 h-full border-r border-gray-400 flex items-center justify-center">
                    <svg class="w-10 h-10 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <div class="w-full h-full flex flex-col justify-center px-2">
                    <span class="text-xs text-gray-800 uppercase">Yearly Leaves</span>
                    <span class="text-sm text-gray-800 font-bold mb-2">Jane Evelyn Doe</span>
                    <div class="flex items-center mb-2">
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-green-800 font-bold">
                                        18.05.2020
                                    </span>
                        </div>
                        <span class="text-bold text-xs mx-2">-</span>
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-red-800 font-bold">
                                        23.05.2020
                                    </span>
                        </div>
                    </div>
                    <div class="text-gray-800 font-bold text-xs uppercase">Available Yearly Leaves: 7</div>
                </div>
                <div class="w-32 h-full border-l border-gray-400 flex flex-col">
                    <button
                        class="h-16 w-full flex items-center justify-center bg-green-500 hover:bg-green-700 focus:bg-green-900 focus:outline-none rounded-tr-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <button
                        class="h-16 w-full flex items-center justify-center bg-red-500 hover:bg-red-700 focus:bg-red-900 focus:outline-none rounded-br-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-96 h-32 my-4 mx-4 shadow-lg rounded-lg bg-gray-200 flex">
                <div class="w-32 h-full border-r border-gray-400 flex items-center justify-center">
                    <svg class="w-10 h-10 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <div class="w-full h-full flex flex-col justify-center px-2">
                    <span class="text-xs text-gray-800 uppercase">Yearly Leaves</span>
                    <span class="text-sm text-gray-800 font-bold mb-2">Jane Evelyn Doe</span>
                    <div class="flex items-center mb-2">
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-green-800" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-green-800 font-bold">
                                        18.05.2020
                                    </span>
                        </div>
                        <span class="text-bold text-xs mx-2">-</span>
                        <div class="flex items-center">
                                    <span class="mr-1">
                                        <svg class="w-4 h-4 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span>
                            <span class="text-xs text-red-800 font-bold">
                                        23.05.2020
                                    </span>
                        </div>
                    </div>
                    <div class="text-gray-800 font-bold text-xs uppercase">Available Yearly Leaves: 7</div>
                </div>
                <div class="w-32 h-full border-l border-gray-400 flex flex-col">
                    <button
                        class="h-16 w-full flex items-center justify-center bg-green-500 hover:bg-green-700 focus:bg-green-900 focus:outline-none rounded-tr-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <button
                        class="h-16 w-full flex items-center justify-center bg-red-500 hover:bg-red-700 focus:bg-red-900 focus:outline-none rounded-br-lg transition-all duration-300 ease-in-out">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="py-4">
            <h2 class="text-xl font-bold ml-8 ">Bugün İzinli Olanlar</h2>
        </div>
        <div class="ml-4 mr-8 flex overflow-x-auto">
            <div class="w-64 h-72 mx-4 mt-2 mb-4 rounded-lg shadow-lg bg-gray-200 flex flex-col flex-shrink-0 justify-between">
                <div class="w-full h-48 bg-green-400 flex items-center justify-center rounded-t-lg">
                    <span class="text-6xl font-bold text-gray-800">JED</span>
                </div>
                <div class="flex flex-col ml-4 mb-4">
                    <span class="text-gray-600 font-bold text-xs uppercase">Human Resource</span>
                    <span class="text-gray-800 font-bold">Jane Evelyn Doe</span>
                    <div class="flex items-center">
                                <span>
                                    <svg class="w-3 h-3 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                        <span class="ml-2 text-xs text-gray-800">02.03.2018</span>
                    </div>
                </div>
            </div>
            <div class="w-64 h-72 mx-4 mt-2 mb-4 rounded-lg shadow-lg bg-gray-200 flex flex-col flex-shrink-0 justify-between">
                <div class="w-full h-48 bg-green-400 flex items-center justify-center rounded-t-lg">
                    <span class="text-6xl font-bold text-gray-800">JED</span>
                </div>
                <div class="flex flex-col ml-4 mb-4">
                    <span class="text-gray-600 font-bold text-xs uppercase">Human Resource</span>
                    <span class="text-gray-800 font-bold">Jane Evelyn Doe</span>
                    <div class="flex items-center">
                                <span>
                                    <svg class="w-3 h-3 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                        <span class="ml-2 text-xs text-gray-800">02.03.2018</span>
                    </div>
                </div>
            </div>
            <div class="w-64 h-72 mx-4 mt-2 mb-4 rounded-lg shadow-lg bg-gray-200 flex flex-col flex-shrink-0 justify-between">
                <div class="w-full h-48 bg-green-400 flex items-center justify-center rounded-t-lg">
                    <span class="text-6xl font-bold text-gray-800">JED</span>
                </div>
                <div class="flex flex-col ml-4 mb-4">
                    <span class="text-gray-600 font-bold text-xs uppercase">Human Resource</span>
                    <span class="text-gray-800 font-bold">Jane Evelyn Doe</span>
                    <div class="flex items-center">
                                <span>
                                    <svg class="w-3 h-3 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                        <span class="ml-2 text-xs text-gray-800">02.03.2018</span>
                    </div>
                </div>
            </div>
            <div class="w-64 h-72 mx-4 mt-2 mb-4 rounded-lg shadow-lg bg-gray-200 flex flex-col flex-shrink-0 justify-between">
                <div class="w-full h-48 bg-green-400 flex items-center justify-center rounded-t-lg">
                    <span class="text-6xl font-bold text-gray-800">JED</span>
                </div>
                <div class="flex flex-col ml-4 mb-4">
                    <span class="text-gray-600 font-bold text-xs uppercase">Human Resource</span>
                    <span class="text-gray-800 font-bold">Jane Evelyn Doe</span>
                    <div class="flex items-center">
                                <span>
                                    <svg class="w-3 h-3 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                        <span class="ml-2 text-xs text-gray-800">02.03.2018</span>
                    </div>
                </div>
            </div>
            <div class="w-64 h-72 mx-4 mt-2 mb-4 rounded-lg shadow-lg bg-gray-200 flex flex-col flex-shrink-0 justify-between">
                <div class="w-full h-48 bg-green-400 flex items-center justify-center rounded-t-lg">
                    <span class="text-6xl font-bold text-gray-800">JED</span>
                </div>
                <div class="flex flex-col ml-4 mb-4">
                    <span class="text-gray-600 font-bold text-xs uppercase">Human Resource</span>
                    <span class="text-gray-800 font-bold">Jane Evelyn Doe</span>
                    <div class="flex items-center">
                                <span>
                                    <svg class="w-3 h-3 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                        <span class="ml-2 text-xs text-gray-800">02.03.2018</span>
                    </div>
                </div>
            </div>
            <div class="w-64 h-72 mx-4 mt-2 mb-4 rounded-lg shadow-lg bg-gray-200 flex flex-col flex-shrink-0 justify-between">
                <div class="w-full h-48 bg-green-400 flex items-center justify-center rounded-t-lg">
                    <span class="text-6xl font-bold text-gray-800">JED</span>
                </div>
                <div class="flex flex-col ml-4 mb-4">
                    <span class="text-gray-600 font-bold text-xs uppercase">Human Resource</span>
                    <span class="text-gray-800 font-bold">Jane Evelyn Doe</span>
                    <div class="flex items-center">
                                <span>
                                    <svg class="w-3 h-3 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                        <span class="ml-2 text-xs text-gray-800">02.03.2018</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Home",
        data() {
            return {}
        },
        methods: {},
        computed: {}
    }
</script>

<style scoped>

</style>
