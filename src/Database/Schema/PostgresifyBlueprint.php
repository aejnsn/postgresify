<?php

namespace Aejnsn\Postgresify\Database\Schema;

use Illuminate\Database\Schema\Blueprint;

class PostgresifyBlueprint extends Blueprint
{
    /**
     * Create a new netmask (CIDR-notation) (cidr) column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function netmask($column)
    {
        return $this->addColumn('netmask', $column);
    }

    /**
     * Create a new box column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function box($column)
    {
        return $this->addColumn('box', $column);
    }

    /**
     * Create a new circle column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function circle($column)
    {
        return $this->addColumn('circle', $column);
    }

    /**
     * Create a new line column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function line($column)
    {
        return $this->addColumn('line', $column);
    }

    /**
     * Create a new line segment (lseg) column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function lineSegment($column)
    {
        return $this->addColumn('lineSegment', $column);
    }

    /**
     * Create a new path column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function path($column)
    {
        return $this->addColumn('path', $column);
    }

    /**
     * Create a new point column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function point($column)
    {
        return $this->addColumn('point', $column);
    }

    /**
     * Create a new polygon column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function polygon($column)
    {
        return $this->addColumn('polygon', $column);
    }

    /**
     * Create a new big (64-bit) integer range (int8) column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function bigIntegerRange($column)
    {
        return $this->addColumn('bigIntegerRange', $column);
    }

    /**
     * Create a new date range column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function dateRange($column)
    {
        return $this->addColumn('dateRange', $column);
    }

    /**
     * Create a new (32-bit) integer range (int4) column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function integerRange($column)
    {
        return $this->addColumn('integerRange', $column);
    }

    /**
     * Create a new numeric range (numrange) column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function numericRange($column)
    {
        return $this->addColumn('numericRange', $column);
    }

    /**
     * Create a new timestamp range (tsrange) column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function timestampRange($column)
    {
        return $this->addColumn('timestampRange', $column);
    }

    /**
     * Create a new timestamp w/ timezone range (tstzrange) column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function timestampTimezoneRange($column)
    {
        return $this->addColumn('timestampTimezoneRange', $column);
    }

    /**
     * Create a new money column on the table.
     *
     * @param  string  $column
     * @return \Illuminate\Support\Fluent
     */
    public function money($column)
    {
        return $this->addColumn('money', $column);
    }
}
