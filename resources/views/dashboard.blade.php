<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <x-category-tabs>No categories</x-category-tabs>
            <div class="mt-8 text-gray-900">
                @forelse ($posts as $post)
                    <x-post-item :post="$post" />
                @empty
                    <div>Posts not found!</div>
                @endforelse

                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>