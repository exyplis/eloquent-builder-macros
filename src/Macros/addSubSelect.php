<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Eloquent\Builder;

/*
 * Adds sub query to exiting one.
 *
 * @author @reinink
 *
 * @param string $column
 * @param        $query
 *
 * @return Builder
 */
Builder::macro('addSubSelect', function ($column, $query) {
    if (is_null($this->getQuery()->columns)) {
        $this->select($this->getQuery()->from.'.*');
    }

    return $this->selectSub($query->limit(1)->getQuery(), $column);
});
