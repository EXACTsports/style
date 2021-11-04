@props([
'id',
'name',
'value',
])

<input 
    type="radio" 
    id="{{ $id }}" 
    name="{{ $name }}" 
    value="{{ $value }}"
    {{ $attributes->merge(['class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300']) }}/>

