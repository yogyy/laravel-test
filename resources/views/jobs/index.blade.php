<x-layout>
    <x-slot:title>Job Listing</x-slot:title>

    <div class="py-5">
        <a href="/jobs/create" class="font-semibold text-sky-300 border px-2 py-2.5 rounded-md border-sky-200">Create
            Job
        </a>
    </div>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-600 rounded-lg">
                <div class="font-medium text-sky-600">
                    {{ $job->employer->name }}
                </div>
                <div class="">
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }} per year
                </div>
            </a>
        @endforeach

        {{ $jobs->links() }}
    </div>
</x-layout>
