<x-layout>
    <x-slot:title>Sign Up</x-slot:title>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-foregtext-foreground/10 pb-12">
                <div class="w-full max-w-sm py-4 my-auto min-w-min md:py-9 md:w-7/12">
                    <h1 class="font-semibold text-xl">Sign Up</h1>
                    <p class="text-sm text-foreground/70">Already have an account?
                        <a href="/login" class="text-blue-400 font-medium">
                            Sign in
                        </a>.
                    </p>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="sm:col-span-4">
                        <x-forms.label for="name">Name</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input type="text" name="name" id="name" :value="old('name')" required />
                            <x-forms.error name="name" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-forms.label for="email">Email</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input type="text" name="email" id="email" :value="old('email')" required />
                            <x-forms.error name="email" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-forms.label for="password">Password</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input type="password" name="password" id="password" required />
                            <x-forms.error name="password" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-forms.label for="password_confirmation">Confirm Password</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input type="password" name="password_confirmation" id="password_confirmation"
                                required />
                            <x-forms.error name="password_confirmation" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-start gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-foreground">Cancel</a>
            <x-forms.button>Register</x-forms.button>
        </div>
    </form>
</x-layout>
