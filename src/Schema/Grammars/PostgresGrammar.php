<?php

namespace Aejnsn\LaravelPostgresify\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\PostgresGrammar as BasePostgresGrammar;
use Illuminate\Support\Fluent;

class PostgresGrammar extends BasePostgresGrammar
{
    protected function typeIpAddress(Fluent $column)
    {
        return 'inet';
    }

    protected function typeNetmask(Fluent $column)
    {
        return 'cidr';
    }

    protected function typeMacAddress(Fluent $column)
    {
        return 'macaddr';
    }



    protected function typePoint(Fluent $column)
    {
        return 'point';
    }

    protected function typeLine(Fluent $column)
    {
        return 'line';
    }

    protected function typeLineSegment(Fluent $column)
    {
        return 'lseg';
    }

    protected function typePath(Fluent $column)
    {
        return 'path';
    }

    protected function typeBox(Fluent $column)
    {
        return 'box';
    }

    protected function typePolygon(Fluent $column)
    {
        return 'polygon';
    }

    protected function typeCircle(Fluent $column)
    {
        return 'circle';
    }



    protected function typeMoney(Fluent $column)
    {
        return 'money';
    }



    protected function typeIntegerRange(Fluent $column)
    {
        return 'int4range';
    }

    protected function typeBigIntegerRange(Fluent $column)
    {
        return 'int8range';
    }

    protected function typeNumericRange(Fluent $column)
    {
        return 'numrange';
    }

    protected function typeTimestampRange(Fluent $column)
    {
        return 'tsrange';
    }

    protected function typeTimestampTimezoneRange(Fluent $column)
    {
        return 'tstzrange';
    }

    protected function typeDateRange(Fluent $column)
    {
        return 'daterange';
    }
}
