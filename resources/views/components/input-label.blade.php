@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-2xl text-white']) }}>
    {{ $value ?? $slot }}
</label>
