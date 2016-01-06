<?php

namespace Aejnsn\LaravelPostgresify\Types;

class Line extends AbstractType implements GeometricFigureInterface, PlaneFigureInterface
{
    public $a;
    public $b;
    public $c;

    public function convertToString()
    {
        // TODO: Implement convertToString() method.
    }

    public function intersection(Line $otherLine)
    {

    }

    public function isParallel(Line $otherLine)
    {

    }

    public function isPerpendicular(Line $otherLine)
    {

    }

    public function slope()
    {

    }
}
