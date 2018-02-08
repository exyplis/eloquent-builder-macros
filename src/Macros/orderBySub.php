<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Eloquent\Builder;

/*
 * Orders sub-query results.
 *
 * @author @reinink
 *
 * @param Builder $query
 * @param        $direction
 *
 * @return Builder
 */
Builder::macro('orderBySub', function ($query, $direction = 'asc') {
    return $this->orderByRaw("({$query->limit(1)->toSql()}) {$direction}");
});
