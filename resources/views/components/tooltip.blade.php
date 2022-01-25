@props(['title' => '', 'abbr' => ''])

<div 
    x-data="{ tooltip: false }" 
    x-on:mouseover="tooltip = true" 
    x-on:mouseleave="tooltip = false"
    class="cursor-pointer">
      {{$abbr}}
      <div 
        x-show="tooltip"
        class="absolute p-2 text-sm text-white transform translate-x-0 translate-y-0 bg-gray-800 rounded-lg">
        {{$title}}
        <br />
        {{$slot}}
      </div>
  </div>