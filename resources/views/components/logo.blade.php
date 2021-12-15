<img 
    src="{{ asset('image/exact-logo.png')}}" 
    
    {{ $attributes->merge(['class' => '']) }}
    {{ $attributes->whereStartsWith('x-') }}
    {{ $attributes->thatStartWith('wire:') }}
/>