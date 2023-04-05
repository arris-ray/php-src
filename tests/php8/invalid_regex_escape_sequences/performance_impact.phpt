--TEST--
Warn of invalid escape sequences in regex patterns.
--SKIPIF--
<?php
print('skip only included for reference');
?>
--FILE--
<?php

error_reporting(E_ALL & ~E_WARNING);

// Setup test data
const NUM_LOOPS = 1000;
const KEY_UNMODIFIED = "unmodified";
const KEY_PCRE_EXTRA = "pcre_extra";
const REGEX_PATTERNS = [
    "unmodified" => "/foo(\Mbar)?baz/",
    "pcre_extra" => "/foo(\Mbar)?baz/X"
];

// Call method under test in a tight loop, collecting timing metrics
$results = [];
foreach (REGEX_PATTERNS as $key => $regex) {
    $start = microtime(true);
    for ($i = 0; $i < NUM_LOOPS; $i++) {
        preg_match($regex, "foobaz"); 
    }
    $diff = microtime(true) - $start;
    $results[$key] = $diff;
}

// Compare timing 
$perfRatio = $results[KEY_PCRE_EXTRA] / $results[KEY_UNMODIFIED];
var_dump($perfRatio);
var_dump($perfRatio < 10.0);

?>
--EXPECTF--
float(%f)
bool(true)