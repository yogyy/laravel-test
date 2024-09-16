@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'text-sky-600' : 'text-foreground/80' }} font-medium transition-colors"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
