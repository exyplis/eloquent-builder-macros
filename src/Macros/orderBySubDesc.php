<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Eloquent\Builder;

/*
 * Orders sub-query results in descending order.
 *
 * Originally posted on https://themsaid.com/laravel-query-conditions-20160425
 * @author @themsaid
 *
 * @param Builder $column
 *
 * @return Builder
 */
Builder::macro('orderBySubDesc', function ($query) {
    return $this->orderBySub($query, 'desc');
});
