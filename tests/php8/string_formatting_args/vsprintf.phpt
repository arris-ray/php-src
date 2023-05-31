--TEST--
Warn of non-array args passed to string-formatting functions.
--FILE--
<?php

var_dump(vsprintf("hello %s", "world")); 

?>
--EXPECTF--
Deprecated: vsprintf(): Non-array args will produce a TypeError in PHP 8 in %s on line %d
string(11) "hello world"