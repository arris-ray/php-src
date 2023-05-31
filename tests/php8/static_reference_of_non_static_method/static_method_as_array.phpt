--TEST--
Warn of statically referenced non-static methods in is_callable.
--FILE--
<?php

class Foo {
	public function bar() {} 
    public static function qux() {}
}

var_dump(is_callable(['Foo', 'qux'])); 

?>
--EXPECTF--
bool(true)
