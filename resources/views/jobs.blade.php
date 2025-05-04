<x-app-layout>
    <x-slot:header>Jobs listing</x-slot:header>
    <ul>
        @forelse ($jobs as $job)
            <li>
                <form class="max-w-sm mx-auto" action="/jobs" method="GET">
                    <div class="mb-5">
                        <input type="text" name="id" hidden value="{{ $job['id'] }}" />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $job['title'] }} - {{ $job['salary'] }}</button>
                </form>
            </li>
        @empty
            <p>List is empty!</p>
        @endforelse
    </ul>
</x-app-layout>