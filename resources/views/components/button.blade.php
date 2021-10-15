<div>
    <span class="inline-flex rounded-md shadow-sm">
        <button
            {{ $attributes->get('id') }}
            {{ $attributes->thatStartWith('wire:') }}
            {{ $attributes->thatStartWith('x-') }}
            {{ $attributes->merge([
                'type' => 'submit',
                'class' => 'py-2 px-4 rounded-md text-sm text-gray-100 font-medium bg-gray-600 hover:bg-logo-orange hover:text-white transition duration-150 ease-in-out' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
            ]) }}
        >
            {{ $slot }}
        </button>
    </span>
</div>