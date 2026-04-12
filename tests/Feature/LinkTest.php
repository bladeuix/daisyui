<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render link with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::link>Default Link</x-daisyui::link>');

    $view->assertSeeHtmlInOrder(values: [
        '<a class="link">',
        'Default Link',
        '</a>',
    ]);
});

it(description: 'can render link with color class', closure: function () {
    $view = $this->blade(template: "<x-daisyui::link color='primary'></x-daisyui::link>");

    $view->assertSee(value: '<a class="link link-primary">', escape: false);
});

it(description: 'can render link with hover class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::link hover></x-daisyui::link>');

    $view->assertSee(value: '<a class="link link-hover">', escape: false);
});

it(description: 'can render link with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::link href="https://example.com" target="_blank">Link</x-daisyui::link>');

    $view->assertSee(value: 'href="https://example.com"', escape: false);
    $view->assertSee(value: 'target="_blank"', escape: false);
});
