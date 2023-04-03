--TEST--
Warn of non-array args passed to string-formatting functions.
--FILE--
<?php

$stream = fopen("php://stdout", "w") or die("Bug!!");
var_dump(vfprintf($stream, "hello %s" . PHP_EOL, "world")); 
fclose($stream);

?>
--EXPECTF--
Deprecated: vfprintf(): Non-array args will produce a TypeError in PHP 8 in %s on line %d
hello world
int(12)