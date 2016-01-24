<?php

namespace Aejnsn\Postgresify\Types;

class IpAddress extends AbstractType implements GeometricFigureInterface
{
    public function broadcast()
    {

    }

    public function family()
    {

    }

    public function host()
    {

    }

    public function isInRange(Netmask $netmask)
    {

    }

    public function maskLength()
    {

    }

    public function network()
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
