--TEST--
Warn of out-of-bound offsets passed to string-manipulation functions.
--FILE--
<?php

var_dump(substr("foo", 4, 1)); 

?>
--EXPECTF--
Deprecated: substr(): Method will return empty string for out-of-bound offset in PHP 8 (length=3, offset=4) in %s on line %d
bool(false)
