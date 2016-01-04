<?php

namespace Aejnsn\LaravelPostgresify\Database;

use Aejnsn\LaravelPostgresify\Database\Schema\Builder as SchemaBuilder;
use Aejnsn\LaravelPostgresify\Database\Schema\Grammars\PostgresGrammar as AejnsnPostgresSchemaGrammar;
use Illuminate\Database\PostgresConnection as BasePostgresConnection;
use Illuminate\Database\Query\Processors\PostgresProcessor;

class PostgresConnection extends BasePostgresConnection
{
    /**
     * Override Illuminate's default schema builder instance with Postgresify's.
     *
     * @return SchemaBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }
        return new SchemaBuilder($this);
    }

    /**
     * Override Illuminate's default schema grammar instance with Postgresify's.
     *
     * @return \Illuminate\Database\Grammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new AejnsnPostgresSchemaGrammar);
    }

    /**
     * Override Illuminate's default post processor instance with Postgresify's.
     *
     * @return PostgresProcessor
     */
    protected function getDefaultPostProcessor()
    {
        //TODO = Do magic on the returned results for points, ranges, etc.
        return new PostgresProcessor;
    }
}
