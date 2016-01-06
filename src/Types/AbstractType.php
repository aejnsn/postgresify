<?php

namespace Aejnsn\LaravelPostgresify\Types;

abstract class AbstractType
{
    /**
     * Every child class must override the __toString() magic method.
     *
     * @return string
     */
    abstract public function __toString();
}
