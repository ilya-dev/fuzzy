# Examples

## Example #1

```php
$rows  = ['f', 'fo', 'foo', 'foob', 'fooba', 'foobar'];
$fuzzy = new Fuzzy\Fuzzy;
$query = 'foobar';
$fuzzy->search($rows, $query, 0);
$fuzzy->search($rows, $query, 1);
$fuzzy->search($rows, $query, 2);
$fuzzy->search($rows, $query, 3);
```
```
array (
  0 => 'f',
  1 => 'fo',
  2 => 'foo',
  3 => 'foob',
  4 => 'fooba',
  5 => 'foobar',
)
[object:Fuzzy\Fuzzy:000000003fe2a3020000000070efdac0]
'foobar'
array (
  0 => 'foobar',
)
array (
  0 => 'foobar',
  1 => 'fooba',
)
array (
  0 => 'foobar',
  1 => 'fooba',
  2 => 'foob',
)
array (
  0 => 'foobar',
  1 => 'fooba',
  2 => 'foob',
  3 => 'foo',
)
```
