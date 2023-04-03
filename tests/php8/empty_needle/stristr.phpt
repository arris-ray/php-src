--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(stristr("foobar", "")); 

?>
--EXPECTF--
Warning: stristr(): Empty needle in %s on line %d
bool(false)