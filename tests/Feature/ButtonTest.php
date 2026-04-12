<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render button with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button>Default Button</x-daisyui::button>');

    $view->assertSeeHtmlInOrder(values: [
        '<button class="btn">',
        'Default Button',
        '</button>',
    ]);
});

it(description: 'can render button with sizes class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button size="lg"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn btn-lg">', escape: false);
});

it(description: 'can render button with color class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button color="primary"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn btn-primary">', escape: false);
});

it(description: 'can render button with state class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button state="disabled"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn btn-disabled">', escape: false);
});

it(description: 'can render button with all shape classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button shape="wide"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn btn-wide">', escape: false);
});

it(description: 'can render button with soft class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button :soft="true"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn btn-soft">', escape: false);
});

it(description: 'can render button with outline solid style', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button outline="solid"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn btn-outline">', escape: false);
});

it(description: 'can render button with outline dashed style', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button outline="dashed"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn btn-dash">', escape: false);
});

it(description: 'can render button with class modifiers', closure: function () {
    $view = $this->blade(template: '<x-daisyui::button class="lg:btn-wide xl:btn-block"></x-daisyui::button>');

    $view->assertSee(value: '<button class="btn lg:btn-wide xl:btn-block">', escape: false);
});
