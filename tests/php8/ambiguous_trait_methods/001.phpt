--TEST--
Warn of ambiguous trait methods.
--FILE--
<?php

trait T1 {
    public function func() {
        echo "From T1" . PHP_EOL;
    }
}

trait T2 {
    public function func() {
        echo "From T2" . PHP_EOL;
    }
}

class Bar {
    public function func() {
        echo "From Bar" . PHP_EOL;
    }
    use T1, T2 {
        func as f1; // we should highlight it as error
    }
}

$b = new Bar();
$b->f1();

?>
--EXPECTF--
Warning: An alias was defined for method func(), which exists in both T1 and T2. Use T1::func or T2::func to resolve the ambiguity in %s on line %d
From T1
