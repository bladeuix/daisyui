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
        '<button class="btn">',
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

    $view->assertSee(value: '<button class="btn btn-primary">', escape: false);
});

it(description: 'can render button with state class', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['state' => 'disabled']
    );

    $view->assertSee(value: '<button class="btn btn-disabled">', escape: false);
});

it(description: 'can render button with all shape classes', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['shape' => 'wide']
    );

    $view->assertSee(value: '<button class="btn btn-wide">', escape: false);
});

it(description: 'can render button with soft class', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['soft' => true]
    );

    $view->assertSee(value: '<button class="btn btn-soft">', escape: false);
});

it(description: 'can render button with class modifiers', closure: function () {
    $view = $this->component(
        componentClass: Button::class,
        data: ['attributes' => ['class' => 'lg:btn-wide xl:btn-block']]
    );

    $view->assertSee(value: '<button class="btn lg:btn-wide xl:btn-block">', escape: false);
})->skip('Switch to blade testing.');
