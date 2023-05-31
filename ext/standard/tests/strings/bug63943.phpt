--TEST--
Bug #63943 (Bad warning text from strpos() on empty needle)
--FILE--
<?php
strpos("lllllll", '');
?>
--EXPECTF--
Warning: strpos(): Empty needle may return a different result in PHP 8 in %sbug63943.php on line %d
