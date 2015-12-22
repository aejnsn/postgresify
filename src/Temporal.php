<?php

namespace Aejnsn\LaravelPostgresify\Traits;

trait Temporal
{
    /**
     * Determine if the model instance is valid.
     *
     * @return boolean
     */
    public function invalid()
    {
        //return $this-> === null || strtotime($this->valid_end) < time();
    }

    public static function withInvalid()
    {
        //return (new static)->newQueryWithoutScope(new TemporalScope);
    }


}
