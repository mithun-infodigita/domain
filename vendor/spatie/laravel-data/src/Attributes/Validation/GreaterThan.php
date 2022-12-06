<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class GreaterThan extends ValidationAttribute
{
    public function __construct(private string $field)
    {
    }

    public function getRules(): array
    {
        return ["gt:{$this->field}"];
    }
}
