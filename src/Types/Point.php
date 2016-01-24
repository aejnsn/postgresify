<?php

namespace Aejnsn\Postgresify\Types;

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

    /**
     * Output the type to a string, in the PostgreSQL preferred format.
     *
     * @return string
     */
    public function __toString()
    {
        return "({$this->x}, {$this->y})";
    }
}
