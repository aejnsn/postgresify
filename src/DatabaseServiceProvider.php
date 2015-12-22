<?php

namespace Aejnsn\LaravelPostgresify;

use Aejnsn\LaravelPostgresify\Connectors\ConnectionFactory;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\DatabaseServiceProvider as BaseDatabaseServiceProvider;

class DatabaseServiceProvider extends BaseDatabaseServiceProvider
{
    public function register()
    {
        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });

        $this->app->singleton('db.factory', function ($app) {
            return new DatabaseManager($app, $app['db.factory']);
        });
    }
}
