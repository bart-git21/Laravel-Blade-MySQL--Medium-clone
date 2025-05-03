<x-app-layout>
    <x-slot:header>Job details</x-slot:header>
    <p>Title: {{$job['title']}}</p>
    <p>Salary: {{ $job['salary'] }}</p>
</x-app-layout>