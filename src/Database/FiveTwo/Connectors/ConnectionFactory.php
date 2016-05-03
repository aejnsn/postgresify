<?php

namespace Aejnsn\Postgresify\Database\FiveTwo\Connectors;

use Aejnsn\Postgresify\Database\FiveTwo\PostgresConnection;
use Illuminate\Database\Connectors\ConnectionFactory as BaseConnectionFactory;
use PDO;

class ConnectionFactory extends BaseConnectionFactory
{
    /**
     * Create a new connection instance with Postgresify's PostgresConnection.
     *
     * @param  string   $driver
     * @param  \PDO|\Closure     $connection
     * @param  string   $database
     * @param  string   $prefix
     * @param  array    $config
     * @return \Illuminate\Database\Connection
     *
     * @throws \InvalidArgumentException
     */
    protected function createConnection($driver, $connection, $database, $prefix = '', array $config = [])
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
