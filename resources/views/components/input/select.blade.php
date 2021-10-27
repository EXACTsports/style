@props([
    'placeholder' => null,
])

<select {{ $attributes->merge(['class' => 'block w-full pl-3 pr-10 py-2 border-gray-300 focus:outline-none focus:shadow-outline-bright-orange focus:border-bright-orange rounded']) }}>
    @if ($placeholder)
        <option disabled value="">{{ $placeholder }}</option>
    @endif

    {{ $slot }}
  </select>