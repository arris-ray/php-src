--TEST--
Warn of null length arguments passed to string-manipulation functions.
--FILE--
<?php

var_dump(substr_count("foo", "oo", 0, null)); 
var_dump(substr_count("foo", "oo", 0)); 
var_dump(substr_count("foo", "o", 0, 3)); 

?>
--EXPECTF--
Deprecated: substr_count(): Method will produce a different result in PHP 8 when length is explicitly null in %s on line %d
int(0)
int(1)
int(2)
