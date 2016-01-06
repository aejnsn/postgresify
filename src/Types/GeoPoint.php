<?php

namespace Aejnsn\LaravelPostgresify\Types;

class GeoPoint extends Point
{
    public $latitude;
    public $longitude;

    public function __construct($x, $y)
    {
        parent::__construct($x, $y);
        $this->latitude = $x;
        $this->longitude = $y;
    }

    public function distance()
    {

    }

    public function toArray()
    {
        return [
            'latitude' => $this->x,
            'longitude' => $this->y
        ];
    }
}
