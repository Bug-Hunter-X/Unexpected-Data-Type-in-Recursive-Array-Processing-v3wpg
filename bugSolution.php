```php
function processData(array $data): array
{
  $result = [];
  foreach ($data as $item) {
    if (is_array($item)) {
      $result = array_merge($result, $this->processData($item));
    } elseif (is_string($item) && strlen($item) > 0) {
      $result[] = $item;
    } elseif ($item !== null) { //Explicitly handle null
        //Handle other data types as needed. For this example, we ignore them
    }
  }
  return $result;
}

$data = [
  "apple",
  ["banana", "cherry"],
  ["date", ["fig", "grape"]],
  "",
  null,
  123,
];

$processedData = processData($data);
print_r($processedData);
```