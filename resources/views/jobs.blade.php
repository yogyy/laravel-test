<h1>Job</h1>

<div class="flex flex-col">
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a>
    @endforeach
</div>
