--TEST--
Warn of statically referenced non-static methods in is_callable.
--FILE--
<?php

class Foo {
	public function bar() {} 
    public static function qux() {}
}

$foo = new Foo();
var_dump(is_callable([$foo, 'qux'])); 

?>
--EXPECTF--
bool(true)
