<button {{ $attributes->class($classes())->merge() }}>
    {{ $prefix ?? '' }}

    {{ $slot }}

    {{ $suffix  ?? '' }}
</button>