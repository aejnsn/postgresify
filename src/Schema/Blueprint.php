<?php

namespace Aejnsn\LaravelPostgresify\Schema;

use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    public function ipAddress($column)
    {
        return $this->addColumn('ipAddress', $column);
    }

    public function macAddress($column)
    {
        return $this->addColumn('macAddress', $column);
    }

    public function netmask($column)
    {
        return $this->addColumn('netmask', $column);
    }



    public function box($column)
    {
        return $this->addColumn('box', $column);
    }

    public function circle($column)
    {
        return $this->addColumn('circle', $column);
    }

    public function line($column)
    {
        return $this->addColumn('line', $column);
    }

    public function lineSegment($column)
    {
        return $this->addColumn('lineSegment', $column);
    }

    public function path($column)
    {
        return $this->addColumn('path', $column);
    }

    public function point($column)
    {
        return $this->addColumn('point', $column);
    }

    public function polygon($column)
    {
        return $this->addColumn('polygon', $column);
    }



    public function bigIntegerRange($column)
    {
        return $this->addColumn('bigIntegerRange', $column);
    }

    public function dateRange($column)
    {
        return $this->addColumn('dateRange', $column);
    }

    public function integerRange($column)
    {
        return $this->addColumn('integerRange', $column);
    }

    public function numericRange($column)
    {
        return $this->addColumn('numericRange', $column);
    }

    public function timestampRange($column)
    {
        return $this->addColumn('timestampRange', $column);
    }

    public function timestampTimezoneRange($column)
    {
        return $this->addColumn('timestampTimezoneRange', $column);
    }



    public function money($column)
    {
        return $this->addColumn('money', $column);
    }
}
