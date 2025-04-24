<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class=" block px-4 py-6 border border-green-200 rounded-lg">
                <div class="text-blue-600 font-bold  text-sm">
                    {{ $job->employer->name }}
                </div>
                <div class="text-laracast">
                    {{ $job['title'] }}: Pays {{ $job['salary'] }} for a year.
                </div>
            </a>
        @endforeach

        <div>
            {{$jobs->links()}}
        </div>

    </div>
</x-layout>
