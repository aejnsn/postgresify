<?php

namespace Aejnsn\Postgresify\Types;

class MacAddress extends AbstractType implements GeometricFigureInterface
{
    public function truncate()
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
