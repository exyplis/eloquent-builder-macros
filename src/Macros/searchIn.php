<?php

namespace Exyplis\EloquentBuilderMacros\Macros;

use Illuminate\Database\Query\Builder;

/*
 * Search through one or multiple columns in table.
 *
 * @author @freekmurze
 *
 * @param string|array $attributes
 * @param string $needle
 *
 * @return Builder
 */
Builder::macro('searchIn', function ($attributes, string $needle) {
    return $this->where(function (Builder $query) use ($attributes,$needle) {
        foreach (array_wrap($attributes) as $attribute) {
            $query->orWhere($attribute, 'LIKE', "%{$needle}%");
        }
    });
});
