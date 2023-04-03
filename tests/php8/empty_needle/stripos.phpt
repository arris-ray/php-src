--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(stripos("foobar", "")); 

?>
--EXPECTF--
Warning: stripos(): Empty needle in %s on line %d
bool(false)