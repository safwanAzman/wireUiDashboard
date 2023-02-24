<header class="fixed z-30 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button
                    x-on:click="toggleSidebarMobile = !toggleSidebarMobile"
                    class="p-2 mr-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100">
                    <x-icon
                        x-cloak
                        x-show="toggleSidebarMobile == false"
                        name="menu"
                        class="w-6 h-6"
                    />
                    <x-icon
                        x-cloak
                        x-show="toggleSidebarMobile == true"
                        name="menu-alt-1"
                        class="w-6 h-6"
                    />
                </button>
                <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
                    <x-logo class="w-auto h-8"/>
                </a>
            </div>
            <div class="relative" x-data="{menuOpen:false}" x-cloak>
                <div
                    x-on:click="menuOpen = !menuOpen"
                    @click.away="menuOpen = false"
                    class="flex items-center space-x-2 cursor-pointer">
                    <img class="inline-block h-7 w-7 rounded-full ring-2 ring-white"
                        src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                        alt=""
                    >
                    <p>User</p>
                </div>
                <div
                    x-show="menuOpen"
                    class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md  border-gray-100 bg-white shadow-lg border-2" role="menu">
                    <div class="p-2">
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 flex items-center font-medium">
                            <x-icon name="logout" class="w-4 h-4 mr-2"/>
                            Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
