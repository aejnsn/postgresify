<?php

namespace Aejnsn\Postgresify\Types;

use Exception;

abstract class AbstractType
{
    /**
     * Output the type to a string, in the PostgreSQL preferred format.
     *
     * @return string
     */
    abstract public function __toString();

    /**
     * Get the type's properties dynamically.
     *
     * @param $name
     *
     * @return mixed
     * @throws Exception
     */
    public function __get($name)
    {
        $method = camel_case('get_' . $name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        throw new Exception("Property {$name} does not exist.");
    }

    /**
     * Set the type's properties dynamically.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return mixed
     * @throws Exception
     */
    public function __set($name, $value)
    {
        $method = camel_case('set_' . $name);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
        throw new Exception("Property {$name} does not exist.");
    }
}
