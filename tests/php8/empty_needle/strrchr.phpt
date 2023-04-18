--TEST--
Warn of empty needles in string-manipulation functions.
--FILE--
<?php

var_dump(strrchr("foobar", "")); 

?>
--EXPECTF--
Warning: strrchr(): Empty needle may return a different result in PHP 8 in %s on line %d
bool(false)