<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Button extends Component
{
    public function __construct(
        public ?string $slot = null,
        public ?string $size = null,
        public ?string $color = null,
        public ?string $state = null,
        public ?string $shape = null,
    ) {
    }

    public function render(): View
    {
        return view(view: 'daisyui::components.button');
    }

    public function classes(): array
    {
        return array_filter([
            'btn',
            $this->sizeClass(),
            $this->colorClass(),
            $this->stateClass(),
            $this->shapeClass(),
        ]);
    }

    private function shapeClass(): string
    {
        return match ($this->shape) {
            'square' => 'btn-square',
            'circle' => 'btn-circle',
            'wide'   => 'btn-wide',
            'block'  => 'btn-block',
            default  => $this->shape ?? '',
        };
    }

    private function stateClass(): string
    {
        return match ($this->state) {
            'active'   => 'btn-active',
            'disabled' => 'btn-disabled',
            default    => $this->state ?? '',
        };
    }

    private function colorClass(): string
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
            default     => $this->color ?? '',
        };
    }

    private function sizeClass(): string
    {
        return match ($this->size) {
            'xs'    => 'btn-xs',
            'sm'    => 'btn-sm',
            'lg'    => 'btn-lg',
            'xl'    => 'btn-xl',
            default => $this->size ?? 'btn-md',
        };
    }
}
