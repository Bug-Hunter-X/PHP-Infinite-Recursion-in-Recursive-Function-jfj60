The corrected code properly defines the base case for the recursive function, preventing infinite recursion:
```php
<?php
function recursiveFunction($value) {
    if ($value <= 0) {
        return 0; // Base case: stop recursion when value is 0 or negative
    } else {
        return $value + recursiveFunction($value - 1);
    }
}

$result = recursiveFunction(5);
echo "Result: " . $result; // Output: Result: 15
?>
```