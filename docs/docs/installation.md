---
title: Installation
description: To install BladeUIX DaisyUI, you can use Composer to require the package. This will add the package to your Laravel project and allow you to use the components in your Blade templates.
group: Docs
---

# Installation

To install BladeUIX DaisyUI, run the following command in your project root:

```bash
composer require bladeuix/daisyui
```

### DaisyUI Installation

You also need to have daisyUI installed in your project. If you haven't already, you can install it via your preferred package manager:

```bash
npm install -D daisyui@latest
```

### Tailwind CSS Scan

To ensure Tailwind CSS scans the Blade component classes correctly, you must add the component source path to your `app.css`. This is particularly important for Tailwind CSS v4+.

Add the following `@source` directive to your `app.css` file:

```css
@source '../../vendor/bladeuix/daisyui/src/View/Components/*.php';
```