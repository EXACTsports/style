@props(['href', 'color'=>'gray-900', 'icon', 'class'=>''])

@switch($color)
	@case('bright-orange')
	    @default 
		@php ($colorClass = 'text-bright-orange hover:text-maroon active:text-gray-900')
        @break
	@case('gray-900')
		@php ($colorClass = 'text-gray-900 hover:text-maroon active:text-bright-orange')
		@break
    @case('maroon')
        @php ($colorClass = 'text-maroon hover:text-bright-orange active:text-bright-orange')
        @break
@endswitch

@php ($default = $colorClass . ' ' . $class . ' font-sans hover:underline')

<a href="{{ $href }}" class="{{ $default }}" {{ $attributes->whereStartsWith('x-') }}>
    {{ $slot }}  
    @switch($icon ?? '')
        @case('back')
            <i class="far fa-arrow-alt-circle-left"></i>
            @break
    @endswitch   
</a>
