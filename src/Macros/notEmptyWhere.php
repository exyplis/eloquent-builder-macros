<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Eloquent\Builder;

/*
 * Check is specified param is empty,
 * if not, adds `where` condition to exiting query
 *
 * @param string $column
 * @param        $param
 *
 * @return Builder
 */

Builder::macro('notEmptyWhere', function ($column, $param) {
    $this->when(!empty($param), function (Builder $query) use ($column, $param) {
        return $query->where($column, $param);
    });

    return $this;
});
