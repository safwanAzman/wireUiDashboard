@extends('layouts.base')

@section('body')
    @yield('content')
    <div x-data="{toggleSidebarMobile:false}">
        @include('include.navbar')
        <div class="flex overflow-hidden bg-white">
            @include('include.sidebar')
            <div
                x-on:click="toggleSidebarMobile = !toggleSidebarMobile"
                class="fixed inset-0 z-10 bg-gray-900 opacity-50"
                x-bind:class="{ 'hidden': !toggleSidebarMobile, 'block': toggleSidebarMobile }" x-cloak>
            </div>
            <div class="relative z-0 w-full h-full overflow-y-auto mt-14 lg:ml-64 bg-white min-h-screen">
                <main class="mx-auto container">
                    <div class="px-6 pt-8">
                        <!--content-->
                        <div class="">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
