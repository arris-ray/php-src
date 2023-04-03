--TEST--
Warn of out-of-bound offsets passed to string-manipulation functions.
--FILE--
<?php

var_dump(substr("foo", 4)); 

?>
--EXPECTF--
Deprecated: substr(): Method will produce a different result in PHP 8 when length is null in %s on line %d

Deprecated: substr(): Method will return empty string for out-of-bound offsets in PHP 8 in %s on line %d
bool(false)
