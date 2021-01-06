<?php

namespace Proform\TestPackege;

class TestPackege
{
    public static function fromKilograms(float $kilograms)
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
