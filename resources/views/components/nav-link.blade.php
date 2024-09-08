@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'text-foreground' : 'text-foreground/80' }}"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
