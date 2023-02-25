<aside
x-cloak
class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 w-64 h-full pt-10 duration-75 lg:flex transition-width"
:class="toggleSidebarMobile ? 'animate__animated animate__slideInLeft' : 'hidden lg:block '">
<div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-gray-50 border-r border-gray-200">
    <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
        <div class="flex-1 px-3 space-y-1 bg-gray-50 divide-y">
            <ul class="pt-4 pb-2 space-y-2">

                <x-sidebar.nav-item
                    title="Dashboard"
                    activeUrl="home"
                    route="{{route('home')}}"
                >
                    <x-slot name="iconName">
                        <x-icon name="home" class="w-6 h-6"/>
                    </x-slot>
                </x-sidebar.nav-item>

                <x-sidebar.dropdown-nav
                    activeUrl="applications/*"
                    title="Applications"
                    >
                    <x-slot name="iconName">
                        <x-icon name="chip" class="w-6 h-6"/>
                    </x-slot>
                    <x-slot name="navItem">
                        <x-sidebar.nav-item
                            title="Applications"
                            activeUrl=""
                            route=""
                        />
                    </x-slot>
                </x-sidebar.dropdown-nav>
            </ul>
        </div>
    </div>
</div>
</aside>
