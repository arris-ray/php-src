--TEST--
Warn of null length arguments passed to string-manipulation functions.
--FILE--
<?php

var_dump(substr_count("foo", "oo", 0, null)); 

?>
--EXPECTF--
Deprecated: substr_count(): Method will produce a different result in PHP 8 when length is null in %s on line %d
int(0)
