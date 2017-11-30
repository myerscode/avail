# Avail
a helper package for Laravel 5

## Install

You can install this package via composer:

``` bash
composer require myerscode/avail
```

## Usage

Access a collection of helper methods for various types, which can be chained of tasks and property types, first pass a value you want to use to the utility objects.

```php
$text = text('hello world');
```
See [utilities-strings](https://github.com/myerscode/utilities-strings) for available methods.

```php
$number = number(69);
```
See [utilities-numbers](https://github.com/myerscode/utilities-numbers) for available methods.

```php
$bag = bag(['Hello', 'World']);
```
See [utilities-bags](https://github.com/myerscode/utilities-bags) for available methods.

## Contributing

We are very happy to receive pull requests to add functionality to the helper classes.
Please submit them to our specific utility library.
