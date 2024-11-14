@props(['active' => false, 'mobile' => false])

@php
    $classes = ($active ?? false)
                ? 'rounded-md px-3 py-2 text-base font-medium text-white bg-gray-900'
                : 'rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white';
    $classes .= $mobile ? ' block' : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : 'false'}}">{{ $slot }}</a>