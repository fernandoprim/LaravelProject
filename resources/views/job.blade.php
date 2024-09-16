<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>We are going to pay you the incredible ammount of {{ $job['salary'] }}</p>
</x-layout>
