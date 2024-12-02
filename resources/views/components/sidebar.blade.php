<aside
    class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
    <div class="relative border-b border-white/20">
        <a class="flex items-center gap-4 px-8 py-6" href="#/">
            <h6 class="block font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-white">
                Portal Berita Dashboard</h6>
        </a>
        <button
            class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
            type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
        </button>
    </div>
    <div class="m-4">
        <ul class="flex flex-col gap-1 mb-4">
            <li>
                <a class="" href="{{ route('dashboard') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <i class="fas fa-home fa-xl"></i>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            dashboard</p>
                    </button>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('post') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <i class="fa-solid fa-newspaper fa-xl"></i>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Posts</p>
                    </button>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('categories') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <i class="fa-solid fa-list fa-xl"></i>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Categories</p>
                    </button>
                </a>
            </li>
        </ul>
        <ul class="flex flex-col gap-1 mb-4">
            <li class="mx-3.5 mt-4 mb-2">
                <p
                    class="block font-sans text-sm antialiased font-black leading-normal text-white uppercase opacity-75">
                    settings</p>
            </li>
            <li>
                <a class="" href="{{ route('users')}}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <i class="fas fa-users fa-xl"></i>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Users</p>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</aside>
