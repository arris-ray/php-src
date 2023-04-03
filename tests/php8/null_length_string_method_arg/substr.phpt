--TEST--
Warn of null length arguments passed to string-manipulation functions.
--FILE--
<?php

var_dump(substr("foo", 1, null)); 

?>
--EXPECTF--
Deprecated: substr(): Method will produce a different result in PHP 8 when length is null in %s on line %d
string(0) ""
