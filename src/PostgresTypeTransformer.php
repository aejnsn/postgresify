<?php

namespace Aejnsn\Postgresify;

use Aejnsn\Postgresify\Types\Point;

class PostgresifyTypeTransformer
{
    public static $validTypes = [
        'ipAddress',
        'netmask',
        'macAddress',
        'point',
        'line',
    ];

    public static function transform($key, $value, $typeInformation)
    {
        $transformMethod = 'transform' . ucfirst($typeInformation['type']);
        return self::$transformMethod($key, $value, $typeInformation);
    }

    public static function transformIpAddress($key, $value, $typeInformation)
    {

    }

    public static function transformNetmask($key, $value, $typeInformation)
    {

    }

    public static function transformMacAddress($key, $value, $typeInformation)
    {

    }

    public static function transformPoint($key, $value, $typeInformation)
    {
        preg_match_all("/-?\d+\.\d+/", $value, $matches);
        $point = new Point(floatval($matches[0][0]), floatval($matches[0][1]));
        return $point;
    }

    public static function transformLine($key, $value, $typeInformation)
    {

    }

    public static function transformLineSegment($key, $value, $typeInformation)
    {

    }

    public static function transformPath($key, $value, $typeInformation)
    {

    }

    public static function transformBox($key, $value, $typeInformation)
    {

    }

    public static function transformPolygon($key, $value, $typeInformation)
    {

    }

    public static function transformCircle($key, $value, $typeInformation)
    {

    }

    public static function transformMoney($key, $value, $typeInformation)
    {

    }

    public static function transformIntegerRange($key, $value, $typeInformation)
    {

    }

    public static function transformBigIntegerRange($key, $value, $typeInformation)
    {

    }

    public static function transformNumericRange($key, $value, $typeInformation)
    {

    }

    public static function transformTimestampRange($key, $value, $typeInformation)
    {

    }

    public static function transformTimestampTimezoneRange($key, $value, $typeInformation)
    {

    }

    public static function transformDateRange($key, $value, $typeInformation)
    {

    }
}
