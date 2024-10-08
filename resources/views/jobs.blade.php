<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="hover::underline text-blue-500">
                    <strong>{{ $job['title'] }}: </strong> Pays {{ $job['salary'] }} per Year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
