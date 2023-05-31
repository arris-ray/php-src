--TEST--
Warn of null length arguments passed to string-manipulation functions.
--FILE--
<?php

var_dump(substr("foo", 1, null)); 
var_dump(substr("foo", 1)); 
var_dump(substr("foo", 1, 1)); 

?>
--EXPECTF--
Deprecated: substr(): Method will produce a different result in PHP 8 when length is explicitly null in %s on line %d
string(0) ""
string(2) "oo"
string(1) "o"