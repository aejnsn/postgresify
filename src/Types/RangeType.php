<?php

namespace Aejnsn\LaravelPostgresify\Types;

abstract class RangeType extends AbstractType
{
    public $upperBound;
    public $lowerBound;

    public function __toString()
    {
        return "{$this->lowerBound},  {$this->upperBound}";
    }
}
