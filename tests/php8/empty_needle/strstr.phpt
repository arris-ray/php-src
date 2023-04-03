--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(strstr("foobar", "")); 

?>
--EXPECTF--
Warning: strstr(): Empty needle in %s on line %d
bool(false)