--TEST--
Warn of empty URL tokens.
--FILE--
<?php

var_dump(parse_url("http://example.com/foo?#")); 

?>
--EXPECTF--
Deprecated: parse_url(): Empty URL fragment will be included as a URL token in PHP 8 in %s on line %d

Deprecated: parse_url(): Empty URL query will be included as a URL token in PHP 8 in %s on line %d
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "example.com"
  ["path"]=>
  string(4) "/foo"
}