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

it(description: 'can render button with state class', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['state' => 'disabled']
    );

    $view->assertSee(value: '<button class="btn btn-md btn-disabled">', escape: false);
});

it(description: 'can render button with all shape classes', closure: function (string $shape, string $class) {
    $view = $this->component(
        componentClass: Button::class,
        data: ['shape' => $shape]
    );

    $view->assertSee(value: sprintf('<button class="btn btn-md %s">', $class), escape: false);
})->with([
    ['square', 'btn-square'],
    ['circle', 'btn-circle'],
    ['wide', 'btn-wide'],
    ['block', 'btn-block'],
]);

it(description: 'can render button with responsive shape modifiers', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['shape' => 'lg:btn-wide xl:btn-block']
    );

    $view->assertSee(value: '<button class="btn btn-md lg:btn-wide xl:btn-block">', escape: false);
});

it(description: 'can render button with responsive size modifiers', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['size' => 'lg:btn-lg xl:btn-xl']
    );

    $view->assertSee(value: '<button class="btn lg:btn-lg xl:btn-xl">', escape: false);
});

it(description: 'can render button with responsive color modifiers', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['color' => 'lg:btn-primary xl:btn-secondary']
    );

    $view->assertSee(value: '<button class="btn btn-md lg:btn-primary xl:btn-secondary">', escape: false);
});

it(description: 'can render button with responsive state modifiers', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['state' => 'lg:btn-active xl:btn-disabled']
    );

    $view->assertSee(value: '<button class="btn btn-md lg:btn-active xl:btn-disabled">', escape: false);
});
