--TEST--
Warn of invalid escape sequences in regex patterns.
--FILE--
<?php

var_dump(preg_match("/foo(\Mqux)?bar/", "foobar")); 

?>
--EXPECTF--
Warning: preg_match(): Compilation will fail in PHP 8: unrecognized character follows \ at offset %d in %s on line %d
int(1)