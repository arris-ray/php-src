--TEST--
Warn of out-of-bound offsets passed to string-manipulation functions.
--FILE--
<?php

var_dump(mb_substr("foo", 4)); 

?>
--EXPECTF--
string(0) ""
