@props([ 'name', 'placeholder' => '' ])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'placeholder:text-slate-400 w-full text-slate-700 text-sm text-center border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow',
        'value' => old($name),
        'placeholder' => $placeholder,
    ];
@endphp

    <input {{ $attributes($defaults) }}>

