--TEST--
Warn of statically referenced non-static methods in is_callable.
--FILE--
<?php

class Foo {
	public function bar() {} 
    public static function qux() {}
}

var_dump(is_callable('Foo::bar')); 

?>
--EXPECTF--
Deprecated: Non-static method Foo::bar() is called statically will fail in PHP 8 in %s on line %d
bool(true)
