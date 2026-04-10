<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Providers;

use Illuminate\Support\ServiceProvider;

class DaisyUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(
            path: __DIR__.'/../../resources/views',
            namespace: 'daisyui'
        );

        \Illuminate\Support\Facades\Blade::componentNamespace(
            namespace: 'BladeUix\\DaisyUi\\View\\Components',
            prefix: 'daisyui'
        );
    }
}
