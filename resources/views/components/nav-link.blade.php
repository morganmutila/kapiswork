@props(['active'])

@php
$classes = 'inline-flex items-center px-1 pt-1 font-medium leading-5 text-gray-900 hover:text-primary focus:outline-none transition duration-150 ease-in-out'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
