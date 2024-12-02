<x-dashboard-layout>
    <div class="min-h-screen mt-2 mr-2 bg-gray-50/50">
        @include('components.sidebar')
        <div class="p-2 xl:ml-80">
            <nav class="block w-full max-w-full px-0 py-1 text-white bg-blue-100 rounded-lg shadow">
                <div class="flex items-center justify-end gap-6">
                    <button data-dropdown-toggle="dropdown"
                        class="flex items-center px-4 text-sm font-bold text-gray-500 uppercase" type="button"> {{auth()->user()->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="w-12 h-12 text-blue-gray-500">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>{{auth()->user()->name }}</div>
                            <div class="font-medium truncate">{{auth()->user()->email }}</div>
                        </div>
                        <div class="py-2">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit"
                                    class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i class="fa-solid fa-right-from-bracket me-2"></i>Sign
                                    out</button>
                            </form>
                        </div>
                    </div>

                </div>
            </nav>
            <div class="mt-4">
                <div class="mt-12">
                    <div class="grid mb-12 gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                        <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                            <div
                                class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-blue-600 to-blue-400 shadow-blue-500/40 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-6 h-6 text-white">
                                    <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                    <path fill-rule="evenodd"
                                        d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                        clip-rule="evenodd"></path>
                                    <path
                                        d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                    </path>
                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                    Today's Money</p>
                                <h4
                                    class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                    $53k</h4>
                            </div>
                            <div class="p-4 border-t border-blue-gray-50">
                                <p
                                    class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                    <strong class="text-green-500">+55%</strong>&nbsp;than last week
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                            <div
                                class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-pink-600 to-pink-400 shadow-pink-500/40 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-6 h-6 text-white">
                                    <path fill-rule="evenodd"
                                        d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                    Today's Users</p>
                                <h4
                                    class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                    2,300</h4>
                            </div>
                            <div class="p-4 border-t border-blue-gray-50">
                                <p
                                    class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                    <strong class="text-green-500">+3%</strong>&nbsp;than last month
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                            <div
                                class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-green-600 to-green-400 shadow-green-500/40 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-6 h-6 text-white">
                                    <path
                                        d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                    </path>
                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                    New Clients</p>
                                <h4
                                    class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                    3,462</h4>
                            </div>
                            <div class="p-4 border-t border-blue-gray-50">
                                <p
                                    class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                    <strong class="text-red-500">-2%</strong>&nbsp;than yesterday
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                            <div
                                class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-orange-600 to-orange-400 shadow-orange-500/40 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-6 h-6 text-white">
                                    <path
                                        d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                                    </path>
                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                    Sales</p>
                                <h4
                                    class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                    $103,430</h4>
                            </div>
                            <div class="p-4 border-t border-blue-gray-50">
                                <p
                                    class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                    <strong class="text-green-500">+5%</strong>&nbsp;than yesterday
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
