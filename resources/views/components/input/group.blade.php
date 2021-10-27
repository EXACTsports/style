@props([
    'label',
    'for',
    'error' => false,
    'helpText' => false,
    'inline' => false,
])

@if($inline)
    <div>
        <label for="{{ $for }}" class="block text-sm font-medium leading-5 text-gray-700">{{ $label }}</label>

        <div class="relative mt-1 rounded-md shadow-sm">
            {{ $slot }}

            @if ($error)
                <div class="mt-1 text-sm text-red-500">{{ $error }}</div>
            @endif

            @if ($helpText)
                <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
            @endif
        </div>
    </div>
@else
    <div class="mb-4">
        <label for="{{ $for }}" class="block mb-2 font-medium text-gray-700">
            {{ $label }}
        </label>

        <div class="mt-1 sm:mt-0 sm:col-span-2">
            {{ $slot }}

            @if ($error)
                <div class="mt-1 text-sm text-red-500">{{ $error }}</div>
            @endif

            @if ($helpText)
                <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
            @endif
        </div>
    </div>
@endif
