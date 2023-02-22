@props([
    'activeUrl' => '',
    'title' => '',
    'iconName' => '',
    'navItem'=> '',

])

<li>
    <details  class="group [&_summary::-webkit-details-marker]:hidden"
        @if(\Request::is($activeUrl))
            open
        @endif>
        <summary
            class="flex items-center px-4 py-2  cursor-pointer  rounded-lg hover:bg-gray-100
            {{\Request::is($activeUrl) ? ' bg-white text-blue-600 ' : 'bg-transparent text-gray-900'}}">

            {{$iconName}}

            <span class="ml-3  text-sm font-medium"> {{$title}} </span>

            <span class="ml-auto transition duration-300 shrink-0 group-open:-rotate-180">

                <x-icon name="chevron-down" class="w-4 h-4"/>

            </span>
        </summary>

        <nav class="mt-1.5 ml-8 flex flex-col">
            {{$navItem}}
        </nav>
    </details>
</li>
