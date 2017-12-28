<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Eloquent\Builder;

/*
 * Check is specified param is empty,
 * if not, adds `whereIn` condition to exiting query
 *
 * @param string $column
 * @param array  $param
 *
 * @return Builder
 */
Builder::macro('notEmptyWhereIn', function ($column, $params) {
    $this->when(!empty($params), function (Builder $query) use ($column, $params) {
        return $query->whereIn($column, $params);
    });

    return $this;
});
