<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Digits extends ValidationAttribute
{
    public function __construct(private int $value)
    {
    }

    public function getRules(): array
    {
        return ["digits:{$this->value}"];
    }
}
