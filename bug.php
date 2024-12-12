In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
$myArray = array('a' => 1, 'b' => 2, 0 => 3);

echo count($myArray); // Outputs 3

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

This code appears innocuous. However, the `0` key implicitly converts the array to a numerically indexed array internally, possibly leading to unexpected reordering and issues with subsequent access by non-numeric keys.