<?php

namespace Aejnsn\LaravelPostgresify\Database\Eloquent;

use Aejnsn\LaravelPostgresify\PostgresifyTypeTransformer;
use Illuminate\Database\Eloquent\Model;

class PostgresifyModel extends Model
{
    protected $postgresifyTypes = [];

    public function getAttributeValue($key)
    {
        $baseAttributes = parent::getAttributeValue($key);
        $value = $this->getAttributeFromArray($key);

        $postgresifyAttributes = [];

        if (in_array($key, $this->postgresifyTypes)) {
            if (! is_null($value)) {
                $postgresifyAttributes[] = PostgresifyTypeTransformer::transform(
                    $key,
                    $value,
                    $this->postgresifyTypes[$key]
                );
            }
        }

        return array_merge($baseAttributes, $postgresifyAttributes);
    }
}
