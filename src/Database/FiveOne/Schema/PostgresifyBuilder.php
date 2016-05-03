<?php

namespace Aejnsn\Postgresify\Database\FiveOne\Schema;

use Aejnsn\Postgresify\Database\Schema\PostgresifyBlueprint;
use Closure;
use Illuminate\Database\Schema\Builder;

class PostgresifyBuilder extends Builder
{
    /**
     * Override Illuminate's Schema Builder by creating the Postgresify Blueprint.
     *
     * @param string $table
     * @param Closure|null $callback
     *
     * @return PostgresifyBlueprint
     */
    protected function createBlueprint($table, Closure $callback = null)
    {
        return new PostgresifyBlueprint($table, $callback);
    }
}
