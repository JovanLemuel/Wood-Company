<div class="h-24 z-50 relative container mx-auto px-6 grid grid-cols-3">

    <div x-data="{ showMenu: false }" class="flex items-center">
        <button x-on:click="showMenu = true">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div x-show="showMenu" class="fixed inset-0 w-full h-full bg-white z-50 text-yellow-900">
            <div
                class="container h-full mx-auto px-6 py-8 relative z-10 flex flex-col items-center justify-center text-2xl uppercase font-bold tracking-widest space-y-6">
                <button x-on:click="showMenu = false" class="absolute top-0 left-0 mt-8 ml-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </button>
                <a href="/home" class="inline-block border-b-4 border-transparent hover:border-yellow-900">home</a>
                <a href="/catalog"
                    class="inline-block border-b-4 border-transparent hover:border-yellow-900">catalog</a>
                <a href="/blog" class="inline-block border-b-4 border-transparent hover:border-yellow-900">blog</a>
                <a href="/contact"
                    class="inline-block border-b-4 border-transparent hover:border-yellow-900">contact</a>
                <div class="absolute inset-0 w-full h-full bg-yellow-900 bg-opacity-20"></div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <a href="/" class="text-white uppercase font-bold text-2xl tracking-widest">
                <img src="/images/logo.png" alt="website-logo"class="h-20 w-64 object-contain object-center" />
                Wood Company
            </a>
        </div>

        <div class="flex items-center justify-end">
            <!-- contact button -->
            <a href="/contact">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </a>
        </div>
    </div>

    <div class="w-full h-24 bg-yellow-900 bg-opacity-95 absolute top-0 left-0"></div>
