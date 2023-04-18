--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(stripos("foobar", "")); 

?>
--EXPECTF--
Warning: stripos(): Empty needle may return a different result in PHP 8 in %s on line %d
bool(false)