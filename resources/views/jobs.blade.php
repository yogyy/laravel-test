<x-layout>
    <x-slot:title>Jobs</x-slot:title>

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
    </div>
</x-layout>
