--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(strpos("foobar", "")); 

?>
--EXPECTF--
Warning: strpos(): Empty needle in %s on line %d
bool(false)