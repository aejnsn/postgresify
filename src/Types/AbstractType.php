<?php

namespace Aejnsn\Postgresify\Types;

abstract class AbstractType
{
    /**
     * Output the type to a string, in the PostgreSQL preferred format.
     *
     * @return string
     */
    abstract public function __toString();
}
