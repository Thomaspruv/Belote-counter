<nav x-data="{ open: false, openMenu: false, openMobile: false }" class="bg-blue-lighter">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center w-4/5">
                <div class="flex-shrink-0 flex items-center">
                    <a class="mb-2 text-2xl md:text-3xl font-bold cursor-pointer md:mb-0 text-white" href="{{ route('dashboard') }}">Comments
                        <span class="ml-2 font-mono text-xs text-primary">alpha</span>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('dashboard') }}" class="@if(Route::currentRouteName() === 'dashboard') bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Comments</a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('add') }}" class="@if(Route::currentRouteName() === 'add') bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Add a Comments</a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('multipleSearch') }}" class="@if(Route::currentRouteName() === 'multipleSearch') bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Multiple search</a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('multipleAdd') }}" class="@if(Route::currentRouteName() === 'multipleAdd') bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Multiple Add</a>
                    </div>
                </div>
            </div>
            <div class="w-1/5" x-data="{ open = false}">
                <button type="button" @click="open = true" class="inline-flex justify-center h-10 w-10 rounded-full shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <img class="w-full h-full rounded-full mb-1 border-2 border-white" src="{{ url('/imgs/sums/1.png') }}" alt="">
                </button>
                <div x-show="open" @click.outside="open = false" class="origin-top-right absolute  w-42 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                    <form method="POST" action="#" role="none">
                        <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex md:items-center">

               
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="openMobile = !openMobile" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden"
         d="mobile-menu"
         x-cloak
         x-show="openMobile"
         @click.away="openMobile = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-90"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90"
    >
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Warnings</a>
        </div>

        <div class="grid grid-cols-3 px-4 pb-4 w-full">
            <div class="flex items-center justify-start">
                <img class="h-6 sm:h-auto" src="/imgs/icons/eth.svg">
                <p class="ml-2 text-gray-300 text-xs sm:text-sm font-bold">{{ cache('eth-price') }} USD</p>
            </div>

            <div class="flex items-center justify-center">
                <img class="h-6 sm:h-auto" src="/imgs/icons/axs.svg">
                <p class="ml-2 text-gray-300 text-xs sm:text-sm font-bold">{{ cache('axs-price') }} USD</p>
            </div>

            <div class="flex items-center justify-end">
                <img class="h-6 sm:h-auto" src="/imgs/icons/slp.svg">
                <p class="ml-2 text-gray-300 text-xs sm:text-sm font-bold">{{ round(cache('slp-price'), 4) }} USD</p>
            </div>
        </div>

        <div class="pt-4 pb-3 border-t border-gray-700">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="/imgs/profile.png" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">{{ auth()->user()->email ?? '' }}</div>
{{--                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>--}}
                </div>
                {{--<button type="button" class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>--}}
            </div>
            <div class="mt-3 px-2 space-y-1">
                <a href="{{ route('account.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
