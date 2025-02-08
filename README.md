# PHP Infinite Recursion Bug

This repository demonstrates a common error in PHP: infinite recursion caused by an incorrectly defined base case in a recursive function. The `bug.php` file contains the buggy code, while `bugSolution.php` provides the corrected version.

## Bug Description
The recursive function `recursiveFunction` does not correctly handle the base case.  If it receives 0 or a negative value for `$value`, it will keep calling itself indefinitely leading to a stack overflow.

## Solution
The solution involves correctly defining the base case. The corrected function ensures that if `$value` is less than or equal to 0, the recursion stops, preventing the stack overflow.