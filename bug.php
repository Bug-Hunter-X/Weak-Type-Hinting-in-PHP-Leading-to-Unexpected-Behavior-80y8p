function foo(int $a, int $b): int {
  return $a + $b;
}

$result = foo(1, '2');
var_dump($result); // outputs 3, but should throw an error