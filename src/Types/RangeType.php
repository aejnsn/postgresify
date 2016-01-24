<?php

namespace Aejnsn\Postgresify\Types;

abstract class RangeType extends AbstractType
{
    public $upperBound;
    public $lowerBound;
}
