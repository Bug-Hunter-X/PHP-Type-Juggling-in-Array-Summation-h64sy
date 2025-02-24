```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += (float)$number; // Explicit type casting for safety
    } else {
      //Handle non-numeric values appropriately. Log an error or throw an exception
      error_log('Non-numeric value encountered in array: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Now it handles the non-numeric value
```