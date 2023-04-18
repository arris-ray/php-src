--TEST--
Warn of type coercion in math functions.
--FILE--
<?php

var_dump(abs("-1")); 

?>
--EXPECTF--
Deprecated: abs(): Method will produce a TypeError in PHP 8 when strict_types are enabled in %s on line %d
int(1)