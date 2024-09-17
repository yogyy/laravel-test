<x-layout>
    <x-slot:title>Sign In</x-slot:title>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-foreground pb-12">
                <div class="w-full max-w-sm py-4 my-auto min-w-min md:py-9 md:w-7/12">
                    <h1 class="font-semibold text-xl">Sign In</h1>
                    <p class="text-sm text-foreground/70">New to idk_what_site_is_this?
                        <a href="/register" class="text-blue-400 font-medium">
                            Sign up for an account
                        </a>.
                    </p>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="sm:col-span-4">
                        <x-forms.label for="email">Email</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input type="text" name="email" id="email" :value="old('email')" required />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-forms.label for="password">Password</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input type="password" name="password" id="password" required />
                        </div>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <i class="text-red-400 text-sm">{{ $err }}</i>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-start gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-foreground">Cancel</a>
            <x-forms.button>Login</x-forms.button>
        </div>
    </form>
</x-layout>
