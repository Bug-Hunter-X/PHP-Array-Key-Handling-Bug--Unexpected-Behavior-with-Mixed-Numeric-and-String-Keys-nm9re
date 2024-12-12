# PHP Array Key Handling Bug

This repository demonstrates a subtle bug in PHP related to array key handling. When an array contains both numeric and string keys, PHP's implicit type conversion can lead to unexpected behavior during iteration and key-based access.

The `bug.php` file contains the erroneous code, while `bugSolution.php` provides a corrected version.

## Bug Description

The problem stems from the use of a numeric key (0) alongside string keys ('a', 'b'). This can lead to unexpected re-ordering and difficulties when accessing array elements using string keys later in the code.

## Solution

The solution involves ensuring consistent use of array keys (either all numeric or all string) for predictable behavior. The corrected `bugSolution.php` file illustrates how to avoid the issue.  Alternatively, carefully choosing appropriate array structures like associative arrays versus indexed arrays can mitigate similar issues.