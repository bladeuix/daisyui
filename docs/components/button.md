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
## API

### Button sizes

Use `size` attribute to control button size. e.g `lg` will render `btn-lg` class.

```html
<x-daisyui::button size="xs">Extra Small</x-daisyui::button>
```
```html
<x-daisyui::button size="sm">Small</x-daisyui::button>
```
```html
<x-daisyui::button size="md">Medium</x-daisyui::button>
```
```html
<x-daisyui::button size="lg">Large</x-daisyui::button>
```
```html
<x-daisyui::button size="xl">Extra large</x-daisyui::button>
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

Use `color` attribute to control button color. e.g `primary` will render `btn-primary` class.

```html
<x-daisyui::button color="neutral">Neutral</x-daisyui::button>
```
```html
<x-daisyui::button color="primary">Primary</x-daisyui::button>
```
```html
<x-daisyui::button color="secondary">Secondary</x-daisyui::button>
```
```html
<x-daisyui::button color="accent">Accent</x-daisyui::button>
```
```html
<x-daisyui::button color="info">Info</x-daisyui::button>
```
```html
<x-daisyui::button color="success">Success</x-daisyui::button>
```
```html
<x-daisyui::button color="warning">Warning</x-daisyui::button>
```
```html
<x-daisyui::button color="error">Error</x-daisyui::button>
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

## Attributes

| Name     | Default | Options                                                            |
|:---------|:--------|:-------------------------------------------------------------------|
| `color`  | -       | neutral, primary, secondary, accent, info, success, warning, error |
| `state`  | active  | active, disabled                                                   |
| `size`   | md      | xs, sm, md, lg, xl                                                 |
| `square` | false   | boolean                                                            |
| `circle` | false   | boolean                                                            |
| `block`  | false   | boolean                                                            |
| `wide`   | false   | boolean                                                            |

## Slots

| Name    | Notes  |
|:--------|:-------|
| default | string |


