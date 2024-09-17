<div class="border-b border-sky-600/50 py-8 w-full flex justify-between px-10 items-center">
    <div class="flex-1 flex items-center gap-4">
        <img src="{!! Vite::asset('/resources/images/logo.png') !!}" alt="Logo" class="size-9" draggable="false">
        <nav class="flex gap-3 text-xl ">
            @foreach ($links as $link)
                <x-nav-link :active="request()->is($link) || request()->is($link . '/*')" href="/{{ $link }}">
                    {{ Str::ucfirst($link) }}
                </x-nav-link>
            @endforeach
        </nav>
    </div>
    <div class="flex items-center justify-end flex-1">
        @guest
            <a class="font-semibold text-foreground hover:text-sky-500 transition-colors" href="/login">Sign
                In</a>
        @endguest

        @auth
            <form method="POST" action="/logout">
                @csrf

                <x-forms.button>Sign Out</x-forms.button>
            </form>
        @endauth
    </div>
</div>
