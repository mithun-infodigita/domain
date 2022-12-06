<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;
use DateTimeInterface;

#[Attribute(Attribute::TARGET_PROPERTY)]
class DateEquals extends ValidationAttribute
{
    public function __construct(private string | DateTimeInterface $date)
    {
    }

    public function getRules(): array
    {
        return ["date_equals:{$this->normalizeValue($this->date)}"];
    }
}
