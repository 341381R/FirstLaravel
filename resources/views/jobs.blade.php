<x-layout>
    <x-slot:heading>
        job listings for catfood
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-purple-500 hover:underline">
                    <strong>{{ $job['title'] }}: </strong>Pays {{ $job['salary'] }} per month.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>