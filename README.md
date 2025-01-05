# PHP Weak Type Hinting Bug

This repository demonstrates a common, yet subtle, bug in PHP related to its weak type hinting system.  The `foo` function is declared to accept two integer arguments, but when a string is passed, it does not throw a type error and instead performs type juggling.  This can lead to unexpected results and difficult-to-debug issues.  The solution provides a more robust way to handle type checking in PHP to prevent these issues.

## How to Reproduce

1. Clone the repository.
2. Run the `bug.php` file using a PHP interpreter.
3. Observe that the output is 3, rather than a type error.  This demonstrates the weak type hinting.