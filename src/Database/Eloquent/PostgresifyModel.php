<?php

namespace Aejnsn\LaravelPostgresify\Database\Eloquent;

use Aejnsn\LaravelPostgresify\PostgresifyTypeTransformer;
use Illuminate\Database\Eloquent\Model;

class PostgresifyModel extends Model
{
    protected $postgresifyTypes = [];

    public function getAttributeValue($key)
    {
        $value = parent::getAttributeValue($key);

        if (in_array($key, array_keys($this->postgresifyTypes))) {
            if (! is_null($value)) {
                return PostgresifyTypeTransformer::transform(
                    $key,
                    $value,
                    $this->postgresifyTypes[$key]
                );
            }
        }
        return $value;
    }
}
