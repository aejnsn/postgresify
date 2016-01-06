<?php

namespace Aejnsn\LaravelPostgresify\Types;

class Box extends AbstractType implements GeometricFigureInterface, PlaneFigureInterface
{
    public function convertToString()
    {
        // TODO: Implement convertToString() method.
    }

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
}
