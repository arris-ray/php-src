--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(strripos("foobar", "")); 

?>
--EXPECTF--
Warning: strripos(): Empty needle in %s on line %d
bool(false)