--TEST--
Warn of non-strict comparisons between numbers and non-numeric strings.
--FILE--
<?php

var_dump(0 == "");

?>
--EXPECTF--
Warning: Result of comparison between 0 and "" will change (1 to 0) in PHP 8 in %s on line %d
bool(true)
