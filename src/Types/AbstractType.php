<?php

namespace Aejnsn\LaravelPostgresify\Types;

abstract class AbstractType
{
    public function __toString()
    {
        return $this->convertToString();
    }
}
