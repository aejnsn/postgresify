<?php

namespace Aejnsn\Postgresify\Types;

class Polygon extends AbstractType implements GeometricFigureInterface, PlaneFigureInterface
{
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
