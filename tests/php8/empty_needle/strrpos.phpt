--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(strrpos("foobar", "")); 

?>
--EXPECTF--
Warning: strrpos(): Empty needle may return a different result in PHP 8 in %s on line %d
bool(false)