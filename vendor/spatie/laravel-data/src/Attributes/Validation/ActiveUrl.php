<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class ActiveUrl extends ValidationAttribute
{
    public function getRules(): array
    {
        return ['active_url'];
    }
}
