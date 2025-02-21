# PHP Recursive Array Processing Bug

This repository demonstrates a common error in PHP when recursively processing arrays:  handling unexpected data types within the input array.  The `processData` function attempts to flatten a multi-dimensional array but fails when encountering non-string elements (such as integers or null values). This leads to unexpected behavior or errors.  The solution demonstrates robust type checking and error handling to prevent such issues.

## Bug

The `bug.php` file contains the buggy code.  The function doesn't explicitly check for non-string elements, causing the `strlen()` function to throw a warning or error.   

## Solution

The `bugSolution.php` file presents a corrected version. It includes a check to ensure elements are strings before processing them, using `is_string()` to provide better type safety.