<?php

namespace Aejnsn\LaravelPostgresify\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ScopeInterface;

class TemporalScope implements ScopeInterface
{
    protected $extensions = ['WithInvalid'];

    public function apply(Builder $builder, Model $model)
    {
        $builder->whereValid();
    }

    public function remove(Builder $builder, Model $model)
    {
        $query = $builder->getQuery();
        $query->wheres = collect($query->wheres)->reject(function ($where) use ($column) {
            return $this->isTemporalConstraint($where, $column);
        })->values()->all();
    }

    public function extend(Builder $builder)
    {

    }

    public function isTemporalConstraint(array $where, $column)
    {
        return $where['type'] == 'Null' && in_array($where['column'], ['valid_start', 'valid_end'], true);
    }
}
