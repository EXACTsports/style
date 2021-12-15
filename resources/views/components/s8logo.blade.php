<img src="{{ asset('image/spect8-logo.png')}}" 
{{ $attributes->merge(['class' => '']) }}
{{ $attributes->whereStartsWith('x-') }}
{{ $attributes->thatStartWith('wire:') }}
/>