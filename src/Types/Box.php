<?php

namespace Aejnsn\Postgresify\Types;

class Box extends AbstractType implements GeometricFigureInterface, PlaneFigureInterface
{
    public function area()
    {
        return $this->height() * $this->width();
    }

    public function center()
    {

    }

    public function contains(PlaneFigureInterface $point)
    {

    }

    public function height()
    {

    }

    /**
     * @return bool
     */
    public function isSquare()
    {
    }

    /**
     * @param Box $otherBox
     * @return Box
     */
    public function overlaps(Box $otherBox)
    {

    }

    public function perimeter()
    {

    }

    public function width()
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
