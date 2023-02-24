@props([
    'name' => '',
])

<a href="#"
    x-on:click.prevent="tab = {{ $name }}"
    class="-mb-px border-current p-4"
    :class="tab === {{$name}} ? 'text-blue-600 border-b border-blue-600' : ' text-gray-500 '">
    {{$slot}}
</a>
