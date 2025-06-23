<div class="min-h-full">
    <nav class="bg-gradient-to-r from-red-900 to-orange-700 fixed w-full top-0 z-50" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 lg:py-3">
            <div class="flex h-16 items-center justify-between">
                <a href="/">
                    <div class="flex items-center">
                        <img class="h-12 mr-2" src="../../img/logo-civfest.png" alt="mockup">
                        <div>
                            <p class="text-white tracking-widest font-bold">CIVFEST</p>
                            <p class="text-white text-xs tracking-wide">Civil Engineering Festival 2025</p>
                        </div>
                    </div>
                </a>
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/"
                                class="{{ request()->is('/') ? 'bg-[#95122C] text-white' : 'text-gray-100 hover:bg-[#95122C] hover:text-white' }} rounded-md px-3 py-2 text-lg font-medium"
                                aria-current="page">Home</a>
                            <a href="/events"
                                class="{{ request()->is('events') ? 'bg-[#95122C] text-white' : 'text-gray-100 hover:bg-[#95122C] hover:text-white' }} rounded-md px-3 py-2 text-lg font-medium"
                                aria-current="page">Events</a>
                            <a href="/past_events"
                                class="{{ request()->is('past_events') ? 'bg-[#95122C] text-white' : 'text-gray-100 hover:bg-[#95122C] hover:text-white' }} rounded-md px-3 py-2 text-lg font-medium"
                                aria-current="page">Past Events</a>
                            <a href="/register"
                                class="{{ request()->is('register') ? 'bg-[#95122C] text-white' : 'text-gray-100 hover:bg-[#95122C] hover:text-white' }} rounded-md px-3 py-2 text-lg font-medium"
                                aria-current="page">Register</a>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div x-show="isOpen" class="lg:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/"
                        class="{{ request()->is('home') ? 'bg-orange-700 text-white' : 'text-gray-300 hover:bg-orange-700 hover:text-white' }} block rounded-md px-3 py-2 text-lg font-medium"
                        aria-current="page">Home</a>
                    <a href="/events"
                        class="{{ request()->is('events') ? 'bg-orange-700 text-white' : 'text-gray-300 hover:bg-orange-700 hover:text-white' }} block rounded-md px-3 py-2 text-lg font-medium"
                        aria-current="page">Events</a>
                    <a href="/past_events"
                        class="{{ request()->is('past_events') ? 'bg-orange-700 text-white' : 'text-gray-300 hover:bg-orange-700 hover:text-white' }} block rounded-md px-3 py-2 text-lg font-medium"
                        aria-current="page">Past Events</a>
                    <a href="/register"
                        class="{{ request()->is('register') ? 'bg-orange-700 text-white' : 'text-gray-300 hover:bg-orange-700 hover:text-white' }} block rounded-md px-3 py-2 text-lg font-medium"
                        aria-current="page">Register</a>
                </div>
            </div>
        </div>

    </nav>
</div>
