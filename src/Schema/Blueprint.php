<?php

namespace Aejnsn\LaravelPgsqlTypes\Schema\Grammars;

use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    protected function addFluentIndexes()
    {
        foreach ($this->columns as $column) {
            foreach (['primary', 'unique', 'index'] as $index) {
                if ($column->$index === true) {
                    $this->$index($column->name);
                    continue 2;
                } elseif (isset($column->$index)) {
                    $this->$index($column->name, $column->$index);
                    continue 2;
                }
            }
        }
    }

    public function inet($column)
    {
        return $this->addColumn('inet', $column);
    }

    public function point($column)
    {
        return $this->addColumn('point', $column);
    }

    public function money($column)
    {
        return $this->addColumn('money', $column);
    }

    public function dateRange($column)
    {
        return $this->addColumn('daterange', $column);
    }
}
