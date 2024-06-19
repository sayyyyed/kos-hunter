@props(['value'])

<label {{ $attributes->merge(['class' => 'lock mb-2 text-sm font-medium text-gray-900 dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>
