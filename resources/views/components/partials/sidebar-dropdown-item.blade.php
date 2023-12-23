@props(['to', 'text', 'active'])

<li class="item {{ $active ?? '' }}">
    <a href="{{ $to ?? '#' }}" class="{{ $active ?? '' }}">{{ $text ?? 'Submenu' }}</a>
</li>
