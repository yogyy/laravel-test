<x-layout>
    <x-slot:title>Edit Job {{ $job->title }}</x-slot:title>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-foregtext-foreground/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-foreground">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-300">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-foreground">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm border focus-within:border-sky-400 sm:max-w-md">
                                <input type="text" name="title" id="title"
                                    class="block flex-1 border-none bg-transparent py-1.5 px-3 text-foreground placeholder:text-gray-400 sm:text-sm sm:leading-6"
                                    placeholder="Shift Leader" value="{{ $job->title }}" required>
                            </div>
                            @error('title')
                                <i class="text-red-400 text-sm">{{ $message }}</i>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-foreground">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm border focus-within:border-sky-400 sm:max-w-md">
                                <input type="text" name="salary" id="salary"
                                    class="block flex-1 bg-transparent py-1.5 px-3 text-foreground placeholder:text-gray-400 sm:text-sm sm:leading-6"
                                    placeholder="$50,000 Per Year" value="{{ $job->salary }}" required>
                            </div>
                            @error('salary')
                                <i class="text-red-400 text-sm">{{ $message }}</i>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">

            <div class="flex items-center gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-foreground"
                    onclick="javascript:history.go(-1)">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-secondary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary/50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
                    Update
                </button>
            </div>
        </div>
    </form>

</x-layout>
