<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\View\Components;

use Illuminate\View\Component;

class Progress extends Component
{
    public function __construct(
        public mixed $value = null,
        public mixed $max = 100,
        public ?string $color = null
    ) {
    }

    public function render(): string
    {
        return <<<'blade'
            <progress {{ $attributes->class($classes())->merge($progressAttributes()) }}></progress>
        blade;
    }

    public function classes(): array
    {
        return array_filter([
            'progress',
            $this->colorClass(),
        ]);
    }

    public function progressAttributes(): array
    {
        if (is_null($this->value)) {
            return [];
        }

        return [
            'value' => $this->value,
            'max'   => $this->max,
        ];
    }

    private function colorClass(): ?string
    {
        return match ($this->color) {
            'neutral'   => 'progress-neutral',
            'primary'   => 'progress-primary',
            'secondary' => 'progress-secondary',
            'accent'    => 'progress-accent',
            'info'      => 'progress-info',
            'success'   => 'progress-success',
            'warning'   => 'progress-warning',
            'error'     => 'progress-error',
            default     => null,
        };
    }
}
