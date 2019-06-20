<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Arr;

/*
 * Check is specified param is empty,
 * if not, adds `whereNotIn` condition to exiting query
 *
 * @param string $column
 * @param array  $param
 *
 * @return Builder
 */
Builder::macro('notEmptyWhereNotIn', function ($column, $params) {
    $this->when(!empty($params), function (Builder $query) use ($column, $params) {
        return $query->whereNotIn($column, Arr::wrap($params));
    });

    return $this;
});
