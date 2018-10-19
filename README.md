# Eloquent builder macros

[![Latest Stable Version](https://poser.pugx.org/exyplis/eloquent-builder-macros/v/stable)](https://packagist.org/packages/exyplis/eloquent-builder-macros)
[![Latest Unstable Version](https://poser.pugx.org/exyplis/eloquent-builder-macros/v/unstable)](https://packagist.org/packages/exyplis/eloquent-builder-macros)
[![Total Downloads](https://poser.pugx.org/exyplis/eloquent-builder-macros/downloads)](https://packagist.org/packages/exyplis/eloquent-builder-macros)
[![License](https://poser.pugx.org/exyplis/eloquent-builder-macros/license)](https://packagist.org/packages/exyplis/eloquent-builder-macros)
[![StyleCI](https://styleci.io/repos/115618166/shield?branch=master)](https://styleci.io/repos/115618166)

This package contains few helpful Eloquent builder macros, curated by Exyplis devs team. We find out this ones useful in day-to-day development, since we ❤️ clean, readable and maintainable code.

Compatible with Laravel v5.4+.

_P.S. If you have any useful macro for Laravel Eloquent Builder, which is not presented here, feel free to add it to our collection, we appreciate your support and gladly merge it 🤝_

## Installation

You can install the package via composer:

```bash
composer require exyplis/eloquent-builder-macros
```

### Laravel 5.4

Add this entry to `providers` array in your `config/app.php` file.

```php
Exyplis\EloquentBuilderMacros\EloquentBuilderMacrosServiceProvider::class
```

### Laravel 5.5+

The package will automatically register itself, so you don't need to do anything else.

## Available macros

-   [`notEmptyWhere`](###notEmptyWhere)
-   [`notEmptyWhereIn`](###notEmptyWhereIn)
-   [`if`](#if)
-   [`addSubSelect`](#addSubSelect)
-   [`orderBySub`](#orderBySub)
-   [`orderBySubDesc`](#orderBySubDesc)
-   [`searchIn`](#searchIn)

### `notEmptyWhere`

Check is passed parameter empty, and if not, adds `where` condition on `$column` to exiting query.
Useful when you have complex query, with a lot of constructions like

##### Signature:

```php
notEmptyWhere($column,$param)
```

##### Example:

```diff
- Model::when('$request->has('key'), function($query){
-    return $query->where('column',$request->input('key');
- })->get();

+ Model::notEmptyWhere('column',$request->input('key'))->get();
```

### `notEmptyWhereIn`

Check is passed parameter empty, and if not, adds `whereIn` condition on `$column` to exiting query.
In this case, `$param` should be array.

##### Signature:

```php
notEmptyWhereIn($column,$params)
```

##### Example:

```diff
- Model::when('$request->has('user_ids'), function($query){
-        return $query->whereIn('user_id', $request->input('user_ids');
-    })->get();
+ Model::notEmptyWhereIn('column',$request->input('user_ids'))->get()
```

### `if`

Check passed condition, and adds custom `where` clause to query, when condition returns `true`.

##### Signature:

```php
if($condition, $column, $operator, $value)
```

##### Example:

```diff
- Model::when($request->customer_id, function($query) use ($request){
-    return $query->where('customer_id', $request->customer_id);
- })->get();

+ Model::if($request->customer_id, 'customer_id', '=', $request->customer_id)->get()
```

### [`addSubSelect`](#addSubSelect)

##### Signature:

```php
// this should be documented.
```

##### Example:

```diff
-Before
+After
```

### [`orderBySub`](#orderBySub)

##### Signature:

```php
// this should be documented
```

##### Example:

```diff
-Before
+After
```

### [`orderBySubDesc`](#orderBySubDesc)

##### Signature:

```php
 // this should be documented.
```

##### Example:

```diff
-Before
+After
```

### [`searchIn`](#searchIn)

##### Signature:

```php
 searchIn($attributes, $needle)
```

##### Example:

```php
    // Get row, where name or email contains `john`
    Model::search(['name','email',], 'john')->get();
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email bks@exyplis.com instead of using the issue tracker.

## Credits

-   [Kostiantyn Bozhko](https://github.com/bozhkos)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
