<x-layout>
    <x-slot:title>Create Job</x-slot:title>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-foregtext-foreground/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-foreground">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-300">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="title" id="title" placeholder="CEO" required />
                            <x-form-error name="title" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="salary" id="salary" placeholder="$50,000 Per Year"
                                required />
                            <x-form-error name="salary" />
                        </div>
                    </div>
                </div>
                {{-- @if ($errors->any())
                    <ul class="text-red-400 text-sm mt-3">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                @endif --}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-start gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-foreground">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
