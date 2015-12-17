<?php

namespace Aejnsn\LaravelPgsqlTypes\Connectors;

use Aejnsn\LaravelPgsqlTypes\PostgresConnection;
use Illuminate\Database\Connectors\ConnectionFactory as BaseConnectionFactory;
use PDO;

class ConnectionFactory extends BaseConnectionFactory
{
    protected function createConnection($driver, PDO $connection, $database, $prefix = '', array $config = [])
    {
        if ($this->container->bound($key = "db.connection.{$driver}")) {
            return $this->container->make($key, [$connection, $database, $prefix, $config]);
        }

        if ($driver === 'pgsql') {
            return new PostgresConnection($connection, $database, $prefix, $config);
        }

        return parent::createConnection($driver, $connection, $database, $prefix, $config);
    }
}
