<x-app-layout>
    @if (isset($job))
        <x-slot:header>Job details</x-slot:header>
        <p>Title: {{$job['title']}}</p>
        <p>Salary: {{ $job['salary'] }}</p>
    @else
        <p>No job!</p>
    @endif
</x-app-layout>