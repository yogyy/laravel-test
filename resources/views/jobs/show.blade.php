<x-layout>
    <x-slot:title>
        {{ $job->title }}
    </x-slot:title>

    <div class="h-auto">
        <div class="py-1.5">
            <h2 class="font-bold text-lg">{{ $job->title }}</h2>
            <p>
                This job pays {{ $job->salary }} per year.
            </p>
        </div>
        <div class="flex gap-3 mt-2">
            <form method="POST" action="/jobs/{{ $job->id }}">
                @csrf
                @method('DELETE')
                <button class="btn text-rose-500">Delete</button>
            </form>
            <a href="/jobs/{{ $job->id }}/edit" class="btn text-sky-500">
                Edit Job
            </a>
        </div>
    </div>

</x-layout>
