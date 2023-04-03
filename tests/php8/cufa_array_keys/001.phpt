--TEST--
Warn of associative array keys passed to call_user_func_array.
--FILE--
<?php

var_dump(call_user_func_array("strlen", ["foo" => "bar"]));

?>
--EXPECTF--
Warning: String key 'foo' will be interpreted as a named parameter in PHP 8 in %s on line %d
int(3)