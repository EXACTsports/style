<div>
    <span class="inline-flex rounded-md shadow-sm">
        <{{ $attributes->has('href') ? 'a' : 'button' }}
            {{ $attributes->get('id') }}
            {{ $attributes->thatStartWith('wire:') }}
            {{ $attributes->thatStartWith('x-') }}
            @if ($attributes->has('href')) href="{{ $attributes->get('href') }}" @endif
            {{ $attributes->merge([
                'type' => 'button',
                'class' => 'py-2 px-4 rounded-md text-sm text-gray-100 font-medium bg-gray-600 hover:bg-logoOrange hover:text-white transition duration-150 ease-in-out' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
            ]) }}
        >
            {{ $slot }}
        </{{ $attributes->has('href') ? 'a' : 'button' }}>
    </span>
</div>