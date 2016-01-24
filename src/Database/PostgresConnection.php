<?php

namespace Aejnsn\Postgresify\Database;

use Aejnsn\Postgresify\Database\Schema\Builder as PostgresifySchemaBuilder;
use Aejnsn\Postgresify\Database\Schema\Grammars\PostgresGrammar as PostgresifySchemaGrammar;
use Illuminate\Database\PostgresConnection as BasePostgresConnection;
use Illuminate\Database\Query\Processors\PostgresProcessor as BasePostgresProcessor;

class PostgresConnection extends BasePostgresConnection
{
    /**
     * Override Illuminate's default schema builder instance with Postgresify's.
     *
     * @return PostgresifySchemaBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }
        return new PostgresifySchemaBuilder($this);
    }

    /**
     * Override Illuminate's default schema grammar instance with Postgresify's.
     *
     * @return \Illuminate\Database\Grammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new PostgresifySchemaGrammar);
    }

    /**
     * Override Illuminate's default post processor instance with Postgresify's.
     *
     * @return BasePostgresProcessor
     */
    protected function getDefaultPostProcessor()
    {
        //TODO = Do magic on the returned results for points, ranges, etc.
        return new BasePostgresProcessor;
    }
}
