--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(strrpos("foobar", "")); 

?>
--EXPECTF--
Warning: strrpos(): Empty needle in %s on line %d
bool(false)