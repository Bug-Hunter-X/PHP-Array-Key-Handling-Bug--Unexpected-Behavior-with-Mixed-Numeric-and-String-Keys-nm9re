The solution involves ensuring consistent use of keys, either all numeric or all string. Using only string keys is generally a safer strategy to avoid implicit type conversion that causes the unexpected order. Here's the corrected code:

```php
//Corrected version using only string keys
$myArray = array('a' => 1, 'b' => 2, 'c' => 3);

echo count($myArray); // Outputs 3

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}

//Or using only numeric keys:
$myArray = array(1 => 1, 2 => 2, 3 => 3);

echo count($myArray); // Outputs 3

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```
This avoids the implicit conversion and maintains the expected key order.