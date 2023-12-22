@props(['text'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $text ?? 'Label' }}
</label>
