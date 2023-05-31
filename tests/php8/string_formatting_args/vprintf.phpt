--TEST--
Warn of non-array args passed to string-formatting functions.
--FILE--
<?php

var_dump(vprintf("hello %s" . PHP_EOL, "world")); 

?>
--EXPECTF--
Deprecated: vprintf(): Non-array args will produce a TypeError in PHP 8 in %s on line %d
hello world
int(12)