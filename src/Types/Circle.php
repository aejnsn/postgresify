<?php

namespace Aejnsn\LaravelPostgresify\Types;

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

    public function convertToString()
    {
        // TODO: Implement convertToString() method.
    }
}
