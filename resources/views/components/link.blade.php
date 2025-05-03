@props(['active' => false])

<li class="mx-2 px-3 py-1 border border-gray-500 rounded-lg {{ $active ? 'active' : 'non-active-link' }}" aria-current="{{ $active ? 'page' : 'false'}}">
    <a {{ $attributes }} class="block"> {{ $slot }} </a>
</li>