<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class ExcludeUnless extends ValidationAttribute
{
    public function __construct(private string $field, private string | bool | int | float $value)
    {
    }

    public function getRules(): array
    {
        return ["exclude_unless:{$this->field},{$this->normalizeValue($this->value)}"];
    }
}
