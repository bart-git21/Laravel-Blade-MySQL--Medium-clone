<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-5xl mb-4">{{$post->title}}</h1>
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img src="{{ Storage::url($post->user->image) }}" alt="{{ $post->user->name }}"
                            class="w-12 h-12 rounded-full">
                    @else
                        <img src="https://liccar.com/wp-content/uploads/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png"
                            alt="avatar" class="w-12 h-12 rounded-full">
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>