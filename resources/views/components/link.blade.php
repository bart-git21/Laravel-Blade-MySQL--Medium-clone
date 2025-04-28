@props(['active'=>false, 'type' => 'a'])

<div class="shrink-0 flex items-center">
    <{{ $type }} {{ $attributes }}
        class="mx-4 {{ $active ? 'text-red-500' : 'text-blue-300' }}"
        aria-current="{{ $active ? 'page' : 'false'}}">
        {{ $slot }}
    </{{ $type }}>
</div>