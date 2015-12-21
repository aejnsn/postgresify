<?php

namespace Aejnsn\LaravelPostgresify\Schema;

use Closure;
use Illuminate\Database\Schema\Builder as BaseBuilder;

class Builder extends BaseBuilder
{
    protected function createBlueprint($table, Closure $callback = null)
    {
        return new Blueprint($table, $callback);
    }
}
