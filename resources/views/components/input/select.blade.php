@props([
    'placeholder' => null,
])

<select {{ $attributes->merge(['class' => 'form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-bright-orange focus:border-bright-orange sm:text-sm sm:leading-5 rounded']) }}>
    @if ($placeholder)
        <option disabled value="">{{ $placeholder }}</option>
    @endif

    {{ $slot }}
  </select>