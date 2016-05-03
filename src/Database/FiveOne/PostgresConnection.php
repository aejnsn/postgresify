<?php

namespace Aejnsn\Postgresify\Database\FiveOne;

use Aejnsn\Postgresify\Database\FiveOne\Schema\PostgresifyBuilder;
use Aejnsn\Postgresify\Database\Schema\Grammars\PostgresGrammar as PostgresifySchemaGrammar;
use Illuminate\Database\PostgresConnection as BasePostgresConnection;

class PostgresConnection extends BasePostgresConnection
{
    /**
     * Override Illuminate's default schema builder instance with Postgresify's.
     *
     * @return PostgresifyBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new PostgresifyBuilder($this);
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
}
