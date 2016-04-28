<?php

namespace Aejnsn\Postgresify\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\PostgresGrammar as BasePostgresGrammar;
use Illuminate\Support\Fluent;

class PostgresGrammar extends BasePostgresGrammar
{
    /**
     * Create the column definition for a CIDR notation-style netmask.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeNetmask(Fluent $column)
    {
        return 'cidr';
    }

    /**
     * Create the column definition for a 2D geometric point (x, y), x and y are floating-point numbers.
     * Two line points may be used for input, styled like (x1, y1), (x2, y2).
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typePoint(Fluent $column)
    {
        return 'point';
    }

    /**
     * Create the column definition for a line represented as a standard linear equation Ax + By + C = 0.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeLine(Fluent $column)
    {
        return 'line';
    }

    /**
     * Create the column definition for a line segment represented by two points (x1, y1), (x2, y2).
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeLineSegment(Fluent $column)
    {
        return 'lseg';
    }

    /**
     * Create the column definition for a path represented as a list of points (x1, y1), (x2, y2), ..., (xn, yn).
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typePath(Fluent $column)
    {
        return 'path';
    }

    /**
     * Create the column definition for a box represented by opposite corners of the box as points (x1, y1), (x2, y2).
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeBox(Fluent $column)
    {
        return 'box';
    }

    /**
     * Create the column definition for a polygon represented by a list of points (vertices of the polygon).
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typePolygon(Fluent $column)
    {
        return 'polygon';
    }

    /**
     * Create the column definition for a circle represented by a center point and a radius <(x, y), r>
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeCircle(Fluent $column)
    {
        return 'circle';
    }
    
    /**
     * Create the column definition for storing amounts of currency with a fixed fractional precision.
     *
     * This will store values in the range of: -92233720368547758.08 to +92233720368547758.07. (92 quadrillion).
     * Output is locale-sensitive, see lc_monetary setting of PostgreSQL instance/s.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeMoney(Fluent $column)
    {
        return 'money';
    }

    /**
     * Create the column definition for storing a 32-bit integer range, (lower-bound, upper-bound).
     *
     * Pay attention to input of range types. [Brackets] indicate an inclusive bound, while (parentheses) indicate
     * an exclusive bound.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeIntegerRange(Fluent $column)
    {
        return 'int4range';
    }

    /**
     * Create the column definition for storing a 64-bit integer range, (lower-bound, upper-bound).
     *
     * Pay attention to input of range types. [Brackets] indicate an inclusive bound, while (parentheses) indicate
     * an exclusive bound.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeBigIntegerRange(Fluent $column)
    {
        return 'int8range';
    }

    /**
     * Create the column definition for storing a range on numeric types.
     *
     * Pay attention to input of range types. [Brackets] indicate an inclusive bound, while (parentheses) indicate
     * an exclusive bound.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeNumericRange(Fluent $column)
    {
        return 'numrange';
    }

    /**
     * Create the column definition for storing a range on timestamp types.
     *
     * Pay attention to input of range types. [Brackets] indicate an inclusive bound, while (parentheses) indicate
     * an exclusive bound.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeTimestampRange(Fluent $column)
    {
        return 'tsrange';
    }

    /**
     * Create the column definition for storing a range on timestamps, with timezones.
     *
     * Pay attention to input of range types. [Brackets] indicate an inclusive bound, while (parentheses) indicate
     * an exclusive bound.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeTimestampTimezoneRange(Fluent $column)
    {
        return 'tstzrange';
    }

    /**
     * Create the column definition for storing a range on date types.
     *
     * Pay attention to input of range types. [Brackets] indicate an inclusive bound, while (parentheses) indicate
     * an exclusive bound.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeDateRange(Fluent $column)
    {
        return 'daterange';
    }
}
