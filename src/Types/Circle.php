<?php

namespace Aejnsn\Postgresify\Types;

class Circle extends AbstractType implements GeometricFigureInterface, PlaneFigureInterface
{
    public $center;
    public $radius;

    public function __construct(Point $center, $radius)
    {
        $this->center = $center;
        $this->radius = $radius;
    }

    public function area()
    {

    }

    public function circumference()
    {

    }

    /**
     * @param PlaneFigureInterface $planeFigure
     * @return bool
     */
    public function contains(PlaneFigureInterface $planeFigure)
    {

    }

    public function diameter()
    {
        return $this->radius * 2;
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
