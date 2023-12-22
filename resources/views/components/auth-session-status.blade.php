@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'p-2 text-sm font-medium text-center text-green-600 border border-green-300 rounded-lg bg-green-50']) }}>
        {{ $status }}
    </div>
@endif
