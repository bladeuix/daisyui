<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Button extends Component
{
    public function __construct(
        public ?string $size = null,
        public ?string $color = null,
        public mixed $slot = null,
    ) {}

    public function render(): View
    {
        return view(view: 'daisyui::components.button');
    }

    public function colorClass(): string
    {
        return match ($this->color) {
            'neutral'   => 'btn-neutral',
            'primary'   => 'btn-primary',
            'secondary' => 'btn-secondary',
            'accent'    => 'btn-accent',
            'info'      => 'btn-info',
            'success'   => 'btn-success',
            'warning'   => 'btn-warning',
            'error'     => 'btn-error',
            default     => '',
        };
    }

    public function sizeClass(): string
    {
        return match ($this->size) {
            'xs'    => 'btn-xs',
            'sm'    => 'btn-sm',
            'lg'    => 'btn-lg',
            'xl'    => 'btn-xl',
            default => 'btn-md',
        };
    }
}
