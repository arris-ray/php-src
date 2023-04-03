--TEST--
Warn of empty URL tokens.
--FILE--
<?php

var_dump(parse_url("http://example.com/foo")); 

?>
--EXPECTF--
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "example.com"
  ["path"]=>
  string(4) "/foo"
}