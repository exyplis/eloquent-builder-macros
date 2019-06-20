<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Query\Builder;

/*
 * Check is specified param is empty,
 * if not, adds `whereYear` condition to exiting query
 *
 * @param string $column
 * @param        $param
 *
 * @return Builder
 */

Builder::macro('notEmptyWhereYear', function ($column, $param) {
    $this->when(!empty($param), function (Builder $query) use ($column, $param) {
        return $query->whereYear($column, $param);
    });

    return $this;
});
