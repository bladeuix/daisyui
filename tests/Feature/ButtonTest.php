<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

use BladeUix\DaisyUi\View\Components\Button;

it(description: 'can render button with default classes', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['slot' => 'Default Button']
    );

    $view->assertSeeHtmlInOrder([
        '<button class="btn btn-md">',
        'Default Button',
        '</button>',
    ]);
});

it(description: 'can render button with sizes class', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['size' => 'lg']
    );

    $view->assertSee(value: '<button class="btn btn-lg">', escape: false);
});

it(description: 'can render button with color class', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['color' => 'primary']
    );

    $view->assertSee(value: '<button class="btn btn-md btn-primary">', escape: false);
});
