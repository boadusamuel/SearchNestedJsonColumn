<?php

namespace Boadusamuel\SearchNestedJsonColumn;

use Illuminate\Database\Eloquent\Builder;

trait QueryJsonColumn
{
    public function searchJsonColumn(Builder $query, $column, $search): Builder
    {
       return $query->where($column, 'like', '%' . $search . '%')
            ->orWhere($column, 'like', '%' . ucfirst($search) . '%')
            ->orWhere($column, 'like', '%' . ucwords($search) . '%')
            ->orWhere($column, 'like', '%' . strtolower($search) . '%')
            ->orWhere($column, 'like', '%' . strtoupper($search) . '%')
            ->orWhere($column, 'like', '%' . ucfirst(strtolower($search)) . '%');
    }
}
