# Changelog

All notable changes to `exyplis/eloquent-builder-macros` will be documented in this file

## 1.1.3 - 2019-03-20

-   Use `Arr` class instead of deprecated helper methods.

## 1.1.2 - 2019-02-27

-   Allow using with Laravel 5.8

## 1.1.1 - 2018-12-03

-   Wrap `$params` into array, to be sure macro works on single values passed

## 1.1.0 - 2018-10-25

-   for `searchIn` macro, return query without changes, if `$needle` is empty.

## 1.0.6 - 2018-10-19

-   Make sure the macro works if `$attributes` is a string.
-   Fixes few typos.

## 1.0.5 - 2018-10-19

-   Macro `Illuminate\Database\Query\Builder` instead of `Illuminate\Database\Eloquent\Builder`

## 1.0.4 - 2018-10-19

-   Adds `searchIn` macro

## 1.0.3 - 2018-10-15

-   Compability with Laravel 5.7
-   Display examples as diffs in README.md

## 1.0.2 - 2018-02-09

-   Add `addSubSelect`, `orderBySub`, `orderBySubDesc` macros from @reinink Laracon 2018 talk
-   Compability with Laravel 5.6

## 1.0.1 - 2018-01-14

-   Add `if` macro from @themsaid blog.

## 1.0.0 - 2017-12-28

-   Initial release
