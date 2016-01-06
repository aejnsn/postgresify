<?php

namespace Aejnsn\LaravelPostgresify\Types;

class Point extends AbstractType implements GeometricFigureInterface
{
    public $x;
    public $y;

    public function __construct($x = null, $y = null)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param Point $otherPoint
     * @return float
     */
    public function distance(Point $otherPoint)
    {
        $xComponent = pow($otherPoint->x - $this->x, 2);
        $yComponent = pow($otherPoint->y - $this->y, 2);
        return sqrt($xComponent + $yComponent);
    }

    /**
     * @param PlaneFigureInterface $planeFigure
     * @return bool
     */
    public function isInside(PlaneFigureInterface $planeFigure)
    {

    }

    /**
     * @param PlaneFigureInterface $planeFigure
     * @return bool
     */
    public function isOutside(PlaneFigureInterface $planeFigure)
    {

    }

    public function toArray()
    {
        return [
            'x' => $this->x,
            'y' => $this->y
        ];
    }

    public function convertToString()
    {
        return "({$this->x}, {$this->y})";
    }
}
