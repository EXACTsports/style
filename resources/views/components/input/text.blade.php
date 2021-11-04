@props([
'id',
'name',
'placeholder' => '',
'type' => 'text',
])

<input 
    type="{{ $type }}" 
    id="{{ $id }}" 
    name="{{ $name }}" 
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded sm:text-sm border-gray-300']) }}/>