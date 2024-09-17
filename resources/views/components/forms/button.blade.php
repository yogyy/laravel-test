<button
    {{ $attributes->merge(['class' => 'rounded-md bg-secondary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary/50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600', 'type' => 'submit']) }}>
    {{ $slot }}
</button>
