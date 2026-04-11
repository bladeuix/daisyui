<button {{ $attributes->class(['btn', $sizeClass, $colorClass])->merge() }}>
    {{ $slot }}
</button>