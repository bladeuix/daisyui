---
title: Button
description: Buttons allow the user to take actions or make choices.
group: Actions
---

# Button

## Usage

Buttons allow the user to take actions or make choices.

```blade
<x-daisyui::button>
    Default
</x-daisyui::button>
```

```html +parse
<div class="component-preview">
    <x-daisyui::button>Default</x-daisyui::button>
</div>
```

### Button sizes

```blade
<x-daisyui::button size="xs">Extra Small</x-daisyui::button>
```
```blade
<x-daisyui::button size="sm">Small</x-daisyui::button>
```
```blade
<x-daisyui::button size="md">Medium</x-daisyui::button>
```
```blade
<x-daisyui::button size="lg">Large</x-daisyui::button>
```
```blade
<x-daisyui::button size="xl">Extra large</x-daisyui::button>
```

```blade
<x-daisyui::button size="lg:btn-lg">Responsive</x-daisyui::button>
```

```html +parse
<div class="component-preview">
    <x-daisyui::button size="xs">Extra Small </x-daisyui::button>
    <x-daisyui::button size="sm">Small</x-daisyui::button>
    <x-daisyui::button size="md">Medium</x-daisyui::button>
    <x-daisyui::button size="lg">Large</x-daisyui::button>
    <x-daisyui::button size="xl">Extra large</x-daisyui::button>
</div>
```

### Button colors

```blade
<x-daisyui::button color="neutral">Neutral</x-daisyui::button>
```
```blade
<x-daisyui::button color="primary">Primary</x-daisyui::button>
```
```blade
<x-daisyui::button color="secondary">Secondary</x-daisyui::button>
```
```blade
<x-daisyui::button color="accent">Accent</x-daisyui::button>
```
```blade
<x-daisyui::button color="info">Info</x-daisyui::button>
```
```blade
<x-daisyui::button color="success">Success</x-daisyui::button>
```
```blade
<x-daisyui::button color="warning">Warning</x-daisyui::button>
```
```blade
<x-daisyui::button color="error">Error</x-daisyui::button>
```

```blade
<x-daisyui::button color="lg:btn-primary">Responsive</x-daisyui::button>
```

```html +parse
<div class="component-preview">
    <x-daisyui::button color="neutral">Neutral</x-daisyui::button>
    <x-daisyui::button color="primary">Primary</x-daisyui::button>
    <x-daisyui::button color="secondary">Secondary</x-daisyui::button>
    <x-daisyui::button color="accent">Accent</x-daisyui::button>
    <x-daisyui::button color="info">Info</x-daisyui::button>
    <x-daisyui::button color="success">Success</x-daisyui::button>
    <x-daisyui::button color="warning">Warning</x-daisyui::button>
    <x-daisyui::button color="error">Error</x-daisyui::button>
</div>
```

### Button states

```blade
<x-daisyui::button>Normal</x-daisyui::button>
```
```blade
<x-daisyui::button state="active">Active</x-daisyui::button>
```
```blade
<x-daisyui::button state="disabled">Disabled</x-daisyui::button>
```

```blade
<x-daisyui::button state="lg:btn-active">Responsive</x-daisyui::button>
```

```html +parse
<div class="component-preview">
    <x-daisyui::button>Normal</x-daisyui::button>
    <x-daisyui::button state="active">Active</x-daisyui::button>
    <x-daisyui::button state="disabled">Disabled</x-daisyui::button>
</div>
```

### Button shapes

```blade
<x-daisyui::button shape="square">Square</x-daisyui::button>
```
```blade
<x-daisyui::button shape="circle">Circle</x-daisyui::button>
```
```blade
<x-daisyui::button shape="wide">Wide</x-daisyui::button>
```
```blade
<x-daisyui::button shape="block">Block</x-daisyui::button>
```

```blade
<x-daisyui::button shape="lg:btn-wide xl:btn-block">
    Responsive Button
</x-daisyui::button>
```

```html +parse
<div class="component-preview">
    <x-daisyui::button shape="square">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
    </x-daisyui::button>
    <x-daisyui::button shape="circle">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
    </x-daisyui::button>
    <x-daisyui::button shape="wide">Wide</x-daisyui::button>
    <x-daisyui::button shape="block">Block</x-daisyui::button>
</div>
```