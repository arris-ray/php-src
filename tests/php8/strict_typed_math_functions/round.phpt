--TEST--
Warn of type coercion in math functions.
--FILE--
<?php

var_dump(round("-1.49")); 

?>
--EXPECTF--
Deprecated: round(): Method will produce a TypeError in PHP 8 when strict_types are enabled in %s on line %d
float(-1)
