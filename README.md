# Fuzzy

Fuzzy searching in PHP made easy!

## Installation

`composer require ilya/fuzzy:~1`

## Use

`array search(array $rows, string $query, integer $threshold = 3)`


```php
$rows = ['f', 'fo', 'foo', 'foob', 'fooba', 'foobar'];

$fuzzy = new \Fuzzy\Fuzzy;

$query = 'foobar';

$fuzzy->search($rows, $query, 0); // ['foobar']
$fuzzy->search($rows, $query, 1); // ['foobar', 'fooba']
$fuzzy->search($rows, $query, 2); // ['foobar', 'fooba', 'foob']
$fuzzy->search($rows, $query, 3); // ['foobar', 'fooba', 'foob', 'foo']
```

## License

This project is licensed under the MIT license.

