<div class="border-b border-sky-600/50 py-8 w-full flex items-center">
    <nav class="flex gap-3 text-xl w-full justify-center">
        @foreach ($links as $link)
            <x-nav-link :active="request()->is($link)" href="/{{ $link }}">
                {{ Str::ucfirst($link) }}
            </x-nav-link>
        @endforeach
    </nav>
</div>
