<?php

namespace Aejnsn\Postgresify;

use Aejnsn\Postgresify\Types\Circle;
use Aejnsn\Postgresify\Types\Point;
use Exception;

class PostgresifyTypeCaster
{
    public function cast($name, $value, $typeInformation)
    {
        $castMethod = camel_case('cast_' . $name);
        if (method_exists($this, $castMethod)) {
            return $this->$castMethod($value);
        }
        throw new Exception("Cast to non-existent type {$name}");
    }

    protected function castIpAddress($value, $typeInformation)
    {

    }

    protected function castNetmask($value, $typeInformation)
    {

    }

    protected function castMacAddress($value, $typeInformation)
    {

    }

    protected function castPoint($value, $typeInformation)
    {
        preg_match_all("/-?\d+\.\d+/", $value, $matches);
        $point = new Point(floatval($matches[0][0]), floatval($matches[0][1]));
        return $point;
    }

    protected function castLine($value, $typeInformation)
    {

    }

    protected function castLineSegment($value, $typeInformation)
    {

    }

    protected function castPath($value, $typeInformation)
    {

    }

    protected function castBox($value, $typeInformation)
    {

    }

    protected function castPolygon($value, $typeInformation)
    {

    }

    protected function castCircle($value, $typeInformation)
    {
        dd($value);
        return new Circle();
    }

    protected function castMoney($value, $typeInformation)
    {

    }

    protected function castIntegerRange($value, $typeInformation)
    {

    }

    protected function castBigIntegerRange($value, $typeInformation)
    {

    }

    protected function castNumericRange($value, $typeInformation)
    {

    }

    protected function castTimestampRange($value, $typeInformation)
    {

    }

    protected function castTimestampTimezoneRange($value, $typeInformation)
    {

    }

    protected function castDateRange($value, $typeInformation)
    {

    }
}
