<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render loading spinner with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::loading></x-daisyui::loading>');

    $view->assertSee(value: '<span class="loading loading-spinner"></span>', escape: false);
});

it(description: 'can render loading with type class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::loading type="dots"></x-daisyui::loading>');

    $view->assertSee(value: '<span class="loading loading-dots"></span>', escape: false);
});

it(description: 'can render loading with size class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::loading size="lg"></x-daisyui::loading>');

    $view->assertSee(value: '<span class="loading loading-spinner loading-lg"></span>', escape: false);
});

it(description: 'can render loading with color class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::loading color="primary"></x-daisyui::loading>');

    $view->assertSee(value: '<span class="loading loading-spinner text-primary"></span>', escape: false);
});

it(description: 'can render loading with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::loading aria-label="Loading something" id="my-loader"></x-daisyui::loading>');

    $view->assertSee(value: 'aria-label="Loading something"', escape: false);
    $view->assertSee(value: 'id="my-loader"', escape: false);
});

it(description: 'can render loading with custom classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::loading class="custom-class"></x-daisyui::loading>');

    $view->assertSee(value: 'class="loading loading-spinner custom-class"', escape: false);
});
