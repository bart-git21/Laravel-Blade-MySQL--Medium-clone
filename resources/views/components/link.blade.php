@props(['active' => false, 'type' => 'a'])

<{{ $type }} {{ $attributes }}
    class = "block py-2 px-3 {{ $active ? 'active' : 'non-active-link' }}"
    aria-current = "{{ $active ? 'page' : 'false'}}">
    {{ $slot }}
</{{ $type }}>
