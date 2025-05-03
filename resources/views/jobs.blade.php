<x-app-layout>
    <x-slot:header>Jobs listing</x-slot:header>
    <ul>
        @forelse ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }} - {{ $job['salary'] }}</a>
            </li>
        @empty
            <p>List is empty!</p>
        @endforelse
    </ul>
</x-app-layout>