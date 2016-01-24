<?php

namespace Aejnsn\Postgresify\Types;

class Line extends AbstractType implements GeometricFigureInterface, PlaneFigureInterface
{
    public $a;
    public $b;
    public $c;

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

    /**
     * Output the type to a string, in the PostgreSQL preferred format.
     *
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}
