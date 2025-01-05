function foo(int $a, int $b): int {
  if (!is_int($a) || !is_int($b)) {
    throw new InvalidArgumentException('Arguments must be integers.');
  }
  return $a + $b;
}

//Example usage 
try {
  $result = foo(1, '2');
  var_dump($result);
} catch (InvalidArgumentException $e) {
  echo 'Error: ' . $e->getMessage();
}

//Correct Usage
$result = foo(1, 2);
var_dump($result); // outputs int(3) 