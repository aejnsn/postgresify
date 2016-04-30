<?php

namespace Aejnsn\Postgresify\Database\Eloquent;

use Aejnsn\Postgresify\PostgresifyTypeCaster;
use Illuminate\Database\Eloquent\Model;

class PostgresifyModel extends Model
{
    protected $postgresifyCasts = [];

    public function getAttributeValue($key)
    {
        $value = parent::getAttributeValue($key);

        if (in_array($key, array_keys($this->postgresifyCasts))) {
            if (! is_null($value)) {
                $postgresifyTypeCaster = new PostgresifyTypeCaster();
                return $postgresifyTypeCaster->cast(
                    $key,
                    $value,
                    $this->postgresifyCasts[$key]
                );
            }
        }
        
        return $value;
    }
}
