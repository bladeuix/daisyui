# Project Rules

This document outlines the basic rules for the project.

### General Guidelines

- All PHP files must start with `declare(strict_types=1);`.
- Use [Laravel Pint](https://laravel.com/docs/pint) for code formatting (`composer format`).
- All code logic and attribute processing must reside in the Blade component class.
- Blade view files (`.blade.php`) should only contain the presentation layer (minimal HTML).
- All HTML/CSS classes must be defined and processed in the Blade component class.

### Blade Component Implementation

- Use a `classes(): array` method in component classes to return an array of filtered class strings.
- Map attributes to CSS classes using `match` statements in private/protected methods (e.g., `sizeClass()`, `colorClass()`).
- In Blade views, use `$attributes->class($classes())->merge()` for the main element.
- Component properties should be defined as `public` in the constructor.

### Testing

- Write feature tests for each component in `tests/Feature/{Component}Test.php`.
- Use [Pest](https://pestphp.com/) for testing (`composer test`).
- Test that components render correctly with various attributes (sizes, colors, states, etc.).
- Use `assertSeeHtmlInOrder` or `assertSee` with `escape: false` to verify rendered HTML.

### Documentation

- Component documentation should be in `docs/components/{component}.md`.
- Each documentation file must include:
    - YAML frontmatter (`title`, `description`, `group`).
    - Usage examples (`## Usage`).
    - API details for sizes, colors, and states (`## API`).
    - A comprehensive `## Attributes` table with Name, Default, and Options.
    - A `## Slots` table for available slots.

### Useful Commands

- `composer format`: Format the code using Laravel Pint.
- `composer test`: Run the test suite using Pest.
