<?php

namespace Aejnsn\Postgresify\Types;

class LineSegment extends AbstractType implements GeometricFigureInterface
{
    public $point1;
    public $point2;

    public function __construct(Point $point1, Point $point2)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method
    }

    public function convertToLine()
    {

    }

    public function isParallel()
    {

    }

    public function isPerpendicular()
    {

    }

    public function midpoint()
    {

    }

    public function slope()
    {
        return ($this->point2->y - $this->point1->y) / ($this->point2->x - $this->point1->x);
    }
}
