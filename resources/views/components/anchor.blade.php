@props(['href', 'color'=>'blue-500', 'icon', 'class'=>'', 'target'=>'_blank'])

@switch($color)
    @case('blue-500')
        @php ($colorClass = 'text-blue-500 hover:text-gray-900 active:text-gray-900')
        @break
    @case('logo-orange')
        @php ($colorClass = 'text-logo-orange hover:text-gray-900 active:text-gray-900')
        @break
	@case('bright-orange')
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

<a href="{{ $href }}" class="{{ $default }}" {{ $attributes->whereStartsWith('x-') }} target="{{$target}}">{{ $slot }}</a>
@switch($icon ?? '')
    @case('back')
        <i class="far fa-arrow-alt-circle-left"></i>
        @break
    @case('ext')
        <i class="far fa-external-link-square-alt"></i>
        @break
@endswitch