@props([
    'route' => '',
    'activeUrl' => '',
    'title' => '',
    'iconName' => '',

])

<li>
    <a href="{{ $route }}"
        class="flex items-center px-4 py-2 text-base font-normal  rounded-lg hover:border-2 mb-2
        {{Route::current()->uri == $activeUrl ? ' bg-white hover:border-0 text-blue-600' : 'bg-transparent text-gray-900'}}
        ">
        {{$iconName}}
        <span class="ml-3  text-sm font-medium">{{$title}}</span>
    </a>
</li>
